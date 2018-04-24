<!DOCTYPE html>
<html>
<head>
    <title>Contact Form Endpoint</title>
    <link rel="stylesheet" href="style.css">
</head>
    <body>
        <div class="form-result">
        <?php
        echo "<p class='message'>Hi {$_POST['name']}, This page is here purely as a confirmation of your contact form being sent. Here is a copy of what you sent for your records:</p>";
        ?>
            <table>
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Value</th>
                    </tr>
                </thead>
                <tbody>
        <?php
        foreach($_POST as $key => $value) {
            if ($key === 'method' || $key === 'submit') {
                continue;
            }
            echo "<tr>
                    <td>{$key}</td>
                    <td>{$value}</td>
                  </tr>";
        }
        ?>
                </tbody>
            </table>
        </div>
    </body>
</html>