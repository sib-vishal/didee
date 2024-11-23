<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Stepper Component</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="index.css"> -->
    <style>
        .stepper-wrapper {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            position: relative;
        }

        .stepper-wrapper::before {
            content: '';
            position: absolute;
            top: 25px;
            left: 0;
            right: 0;
            height: 2px;
            background: #e0e0e0;
            z-index: 0;
        }

        .stepper-item {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            transition: all 0.3s ease;
        }

        .step-counter {
            position: relative;
            z-index: 1;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: #fff;
            border: 2px solid #e0e0e0;
            color: #6c757d;
            font-weight: 600;
            margin-bottom: 10px;
            transition: all 0.3s ease;
        }

        .step-name {
            color: #6c757d;
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 5px;
            text-align: center;
        }

        .step-description {
            color: #999;
            font-size: 0.875rem;
            text-align: center;
        }

        .stepper-item.completed .step-counter {
            background-color: #198754;
            border-color: #198754;
            color: #fff;
        }

        .stepper-item.active .step-counter {
            background-color: #0d6efd;
            border-color: #0d6efd;
            color: #fff;
            box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.25);
        }

        .stepper-item.completed .step-name,
        .stepper-item.active .step-name {
            color: #212529;
        }

        @media (max-width: 768px) {
            .stepper-wrapper {
                flex-direction: column;
                align-items: flex-start;
                padding-left: 30px;
            }

            .stepper-wrapper::before {
                top: 0;
                left: 55px;
                width: 2px;
                height: 100%;
            }

            .stepper-item {
                flex-direction: row;
                align-items: flex-start;
                margin-bottom: 20px;
            }

            .step-counter {
                margin-right: 15px;
                margin-bottom: 0;
            }

            .step-name,
            .step-description {
                text-align: left;
            }
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <div class="stepper-wrapper">
            <div class="stepper-item completed">
                <div class="step-counter">1</div>
                <div class="step-name">Account Details</div>
                <div class="step-description">Set up your basic info</div>
            </div>
            <div class="stepper-item active">
                <div class="step-counter">2</div>
                <div class="step-name">Personal Info</div>
                <div class="step-description">Tell us about yourself</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">3</div>
                <div class="step-name">Preferences</div>
                <div class="step-description">Customize your experience</div>
            </div>
            <div class="stepper-item">
                <div class="step-counter">4</div>
                <div class="step-name">Confirmation</div>
                <div class="step-description">Review and submit</div>
            </div>
        </div>
        <div class="d-flex justify-content-between mt-5">
            <button class="btn btn-outline-primary" aria-label="Previous step">Previous</button>
            <button class="btn btn-primary" aria-label="Next step">Next</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>