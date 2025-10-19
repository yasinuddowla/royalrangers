<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Service Unavailable | MR Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #003366;
            --primary-dark: #0D263F;
            --primary-light: #D6DEE6;
            --text-primary: #031120;
            --text-secondary: #616161;
            --text-disabled: #919EAB;
        }

        body {
            font-family: 'Inter', sans-serif;
            color: var(--text-primary);
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-container {
            max-width: 600px;
            padding: 40px;
            text-align: center;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
        }

        h1 {
            font-size: 40px;
            font-weight: 700;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        h2 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            color: var(--text-secondary);
            margin-bottom: 30px;
        }

        .btn-primary {
            background-color: var(--primary-color);
            border-color: var(--primary-color);
            padding: 8px 16px;
            font-size: 15px;
            font-weight: 500;
            letter-spacing: 0.5px;
            border-radius: 8px;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }

        .maintenance-icon {
            font-size: 60px;
            color: var(--primary-color);
            margin-bottom: 20px;
        }

        .chip {
            display: inline-block;
            padding: 4px 16px;
            background-color: var(--primary-light);
            color: var(--primary-color);
            border-radius: 1000px;
            font-size: 12px;
            font-weight: 500;
            line-height: 16px;
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="error-container m-auto">
                    <div class="maintenance-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4" />
                            <path
                                d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z" />
                        </svg>
                    </div>
                    <span class="chip">503</span>
                    <h1>Under Maintenance</h1>
                    <h2>Service Temporarily Unavailable</h2>
                    <p>We're currently performing some scheduled maintenance. We'll be back online shortly. Thank you
                        for your patience.</p>
                    <div class="d-grid gap-2 col-6 mx-auto">
                        <button class="btn btn-primary" onclick="window.location.reload()" type="button">Refresh
                            Page</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
