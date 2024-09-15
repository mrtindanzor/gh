<?php
if (isset($_GET['titleEmpty'])) {
                            $titleError = $_GET['titleEmpty']
                            . $response = 'You must add a title.';
}

if (isset($_GET['descriptionEmpty'])) {
                            $descriptionError = $_GET['descriptionEmpty']
                            . $response       = 'You must add a description';
}

if (isset($_GET['priceEmpty'])) {
                            $priceError = $_GET['priceEmpty']
                            . $response = 'You must add the price';
}

if (isset($_GET['mainCategoryEmpty'])) {
                            $mainCategoryError = $_GET['mainCategoryEmpty']
                            . $response        = 'Choose a category';
}

if (isset($_GET['subcategoryEmpty'])) {
                            $subCategoryError = $_GET['subcategoryEmpty']
                            . $response       = 'Select a subcategory';
}

if (isset($_GET['regionIdEmpty'])) {
                            $regionError = $_GET['regionIdEmpty']
                            . $response  = 'Please set a region for the item';
}

if (isset($_GET['cityIdEmpty'])) {
                            $cityError  = $_GET['cityIdEmpty']
                            . $response = 'Please set a city for the item';
}

if (isset($_GET['imageFieldEmpty'])) {
                            $imageFieldError = $_GET['imageFieldEmpty']
                            . $response      = 'Please add some images to your ad';
}

if (isset($_GET['imageUploadError'])) {
                            $imageUploadError = $_GET['imageUploadError']
                            . $response       = 'An error occured while uploading images';
}

if (isset($_GET['imageExtensionNotAllowed'])) {
                            $imageExtensionError = $_GET['imageExtensionNotAllowed']
                            . $response          = 'Allowed images are jpg, jpeg and png only.';
}

if (isset($_GET['largeImageSize'])) {
                            $imageSizeError = $_GET['largeImageSize']
                            . $response     = 'Image size should be at most 2MB';
}