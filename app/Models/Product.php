<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    use HasFactory;

    private static $product, $image, $imageUrl, $imageName, $extension, $directory, $message;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$extension = self::$image->getClientOriginalExtension();
        self::$imageName = time().'.'.self::$extension;
        self::$directory = 'course-images/';
        self::$image->move(self::$directory, self::$imageName);
        return self::$directory.self::$imageName;
    }

    public static function newProduct($request)
    {
        self::$product = new Product();
        self::$product->category_id      = $request->category_id;
        self::$product->name            = $request->name;
        self::$product->brand_name        = $request->brand_name;
        self::$product->description      = $request->description;
        self::$product->price              = $request->price;
        self::$product->image            = self::getImageUrl($request);
        self::$product->save();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if ($request->file('image'))
        {
            if (file_exists(self::$product->image))
            {
                unlink(self::$product->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::$product->category_id      = $request->category_id;
        self::$product->name            = $request->name;
        self::$product->brand_name        = $request->brand_name;
        self::$product->description      = $request->description;
        self::$product->price              = $request->price;
        self::$product->image            = self::getImageUrl($request);
        self::$product->save();
    }

    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        if (file_exists(self::$product->image))
        {
            unlink(self::$product->image);
        }
        self::$product->delete();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public static function updateProductStatus($id)
    {
        self::$product = Product::find($id);
        if (self::$product->status == 1 )
        {
            self::$product->status = 0;
            self::$message = 'Course status info unpublished successfully.';
        }
        else
        {
            self::$product->status = 1;
            self::$message = 'Course status info published successfully.';
        }
        self::$product->save();
        return self::$message;
    }
}
