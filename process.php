<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Confirmed | Royal Gala</title>
    <style>
        :root {
            --royal-red: #9d0208;
            --deep-crimson: #370617;
            --glass-white: rgba(255, 255, 255, 0.12);
            --pure-white: #ffffff;
        }

        body {
            font-family: 'Garamond', serif;
            background: radial-gradient(circle at center, #6a040f 0%, #03071e 100%);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            margin: 0;
        }

        .confirmation-card {
            background: var(--glass-white);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            padding: 60px 40px;
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            text-align: center;
            max-width: 500px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
            animation: fadeIn 1.5s ease-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .seal {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, #ffd700, #b8860b);
            border-radius: 50%;
            margin: 0 auto 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: var(--deep-crimson);
            box-shadow: 0 0 20px rgba(255, 215, 0, 0.4);
        }

        h1 {
            font-weight: 300;
            letter-spacing: 5px;
            text-transform: uppercase;
            margin-bottom: 20px;
        }

        .details {
            font-size: 1.2rem;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 40px;
        }

        .btn-back {
            display: inline-block;
            text-decoration: none;
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.4);
            padding: 12px 30px;
            border-radius: 8px;
            letter-spacing: 2px;
            text-transform: uppercase;
            transition: 0.3s;
        }

        .btn-back:hover {
            background: white;
            color: var(--deep-crimson);
        }
    </style>
</head>
<body>

    <div class="confirmation-card">
        <div class="seal">✓</div>
        
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Sanitize input to prevent XSS
            $name = htmlspecialchars($_POST['name']);
            $ticket = htmlspecialchars($_POST['ticket']);

            echo "<h1>Accepted</h1>";
            echo "<div class='details'>";
            echo "It is our honor to confirm the attendance of <br>";
            echo "<strong>$name</strong><br>";
            echo "to the <strong>" . strtoupper($ticket) . "</strong> experience.";
            echo "</div>";
        } else {
            echo "<h1>Invalid Entry</h1>";
            echo "<p>Please return to the main hall to register.</p>";
        }
        ?>

        <a href="index.html" class="btn-back">Return to Invitation</a>
    </div>

</body>
</html>
