<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use setasign\Fpdi\Fpdi;
use Storage;

class ImagePlacementController extends Controller
{
    public function submit(Request $request)
    {
        $pdf_path = $request->file('pdf')->store('public/pdfs');

        $pdf_absolute_path = str_replace("\\", "/", public_path(Storage::url($pdf_path)));

        $image_path = $request->file('image')->store('public/images');

        $image_absolute_path = str_replace("\\", "/", public_path(Storage::url($image_path)));


        $pdf_object = new Fpdi(); // CREATING AN OBJECT FROM THE FDPI CLASS

        $pdf_object->AddPage();

        $pdf_object->setSourceFile($pdf_absolute_path); // TAKING THE PDF THAT WAS UPLOADED

        $first_page = $pdf_object->importPage(1); // IMPORTING THE FIRST PAGE FROM THE UPLOADED PDF

        $pdf_object->useTemplate($first_page);

        $pdf_object->Image($image_absolute_path, $request->x_axis, $request->y_axis, $request->width, $request->height); // PLACING THE UPLOADED IMAGE ON THE UPLOADED PDF


        if($request->mode_of_submission == 1)
        {
            return $pdf_object->Output("I", "Image_On_PDF.pdf"); // STREAMING THE FINAL PDF IN A PREVIEW IN THE BROWSER
        }
        else if($request->mode_of_submission == 2)
        {
            return $pdf_object->Output("D", "Image_On_PDF.pdf"); // DOWNLOADING THE FINAL PDF
        }
    }
}
