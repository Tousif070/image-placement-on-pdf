<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>Image Placement On PDF</title>

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col">

                <h1>Image Placement On PDF</h1>

                <form action="{{ route('submit') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="mt-3">
                        <label class="form-label">Choose a PDF</label>
                        <input class="form-control" type="file" name="pdf" accept="application/pdf" required>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Choose an Image</label>
                        <input class="form-control" type="file" name="image" accept="image/*" required>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Enter the value of X-Axis for the Image</label><br><span class="text-info"><small>Please keep the value within 120 for better view</small></span>
                        <input class="form-control" type="number" name="x_axis" required>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Enter the value of Y-Axis for the Image</label><br><span class="text-info"><small>Please keep the value within 120 for better view</small></span>
                        <input class="form-control" type="number" name="y_axis" required>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Enter the Width of the Image</label><br><span class="text-info"><small>Please keep the value within 200 for better view</small></span>
                        <input class="form-control" type="number" name="width" required>
                    </div>

                    <div class="mt-3">
                        <label class="form-label">Enter the Height of the Image</label><br><span class="text-info"><small>Please keep the value within 200 for better view</small></span>
                        <input class="form-control" type="number" name="height" required>
                    </div>

                    <div class="mt-3">

                        <label class="form-label">Select the mode of submission</label>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mode_of_submission" id="flexRadioDefault1" value="1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Stream
                            </label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="mode_of_submission" id="flexRadioDefault2" value="2">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Download
                            </label>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary mt-3">Submit</button>

                </form>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>
