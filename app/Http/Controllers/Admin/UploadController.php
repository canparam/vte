<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function tinyUpload(Request $request)
    {
        $request->validate([
            'file' => ['required', 'file'],
        ]);

        $directory = $request->input('directory', 'attachments');
        $disk = $request->input('disk', config('forms.default_filesystem_disk'));
        $path = $request->file('file')->store($directory, $disk);

        return Storage::url($path);
    }
}
