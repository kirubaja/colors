<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color Palette Example</title>
    <style>
        /* Define custom color classes */
        .color-box {
            width: 20px;
            height: 20px;
            display: inline-block;
            margin: 5px;
            border: 1px solid #ccc;
        }

        /* Center the color boxes and text */
        .color-container {
            text-align: center;
            margin-bottom: 20px; /* Add margin for separation between lines */
        }

        /* Style for text labels */
        .section-label {
            font-weight: bold;
        }

        /* Center the line separator */
        .line-separator {
            text-align: center;
            margin-bottom: 20px; /* Add margin for separation between lines */
        }

        /* Center the standard colors container */
        .standard-colors-container {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>

    <?php
    echo "<CENTER>Theme colors</CENTER><br>";
    $colors = [
        '#1f77b4', '#ff7f0e', '#2ca02c', '#d62728', '#9467bd',
        '#8c564b', '#e377c2', '#7f7f7f', '#bcbd22', '#17becf',
        '#1a9850', '#66c2a5', '#fc8d62', '#8da0cb', '#e78ac3',
        '#a6d854', '#ffd92f', '#636363', '#e5c494', '#3182bd',
        '#393b79', '#5254a3', '#6b6ecf', '#9c9ede', '#637939',
        '#8ca252', '#b5cf6b', '#cedb9c', '#8c6d31', '#bd9e39',
        '#e7ba52', '#e7cb94', '#843c39', '#ad494a', '#d6616b',
        '#e7969c', '#7b4173', '#a55194', '#ce6dbd', '#de9ed6',
        '#3182bd', '#6baed6', '#9ecae1', '#c6dbef', '#e6550d',
        '#fd8d3c', '#fdae6b', '#fdd0a2', '#31a354', '#74c476',
        '#a1d99b', '#c7e9c0', '#756bb1', '#9e9ac8', '#bcbddc',
        '#dadaeb', '#636363', '#bdbdbd', '#737373', '#969696',
        '#bdbdbd', '#d9d9d9', '#595959', '#737373', '#969696',
        '#d9d9d9', '#f0f0f0', '#f7f7f7', '#f7f7f7', '#f7f7f7',
        // Additional standard colors
        'red', 'blue', 'green', 'yellow', 'orange',
        'purple', 'pink', 'brown', 'gray', 'black'
    ];

    $numPerRow = 10;
    $rowCount = count($colors) / $numPerRow;

    echo '<div class="color-container">';
    
    for ($i = 0; $i < $rowCount; $i++) {
        echo '<div>';
        for ($j = 0; $j < $numPerRow; $j++) {
            $index = $i * $numPerRow + $j;
            if ($index < count($colors)) {
                echo '<div class="color-box" style="background-color: ' . $colors[$index] . ';"></div>';
            }
        }
        echo '</div><br>';
    }

    echo '</div>'; // Close the color container

    // Display separator line for "Standard colors"
    echo '<div class="line-separator">________________________________</div><br>';
    echo '<div class="standard-colors-container">';
    echo '<div class="color-container">';
    echo '<div class="section-label">Standard colors</div>';
    // Display "Standard colors"
    for ($i = count($colors) - 20; $i < count($colors) - 10; $i++) {
        echo '<div class="color-box" style="background-color: ' . $colors[$i] . ';"></div>';
    }
    echo '</div>'; // Close the standard colors container
    echo '</div>'; // Close the color container

    // Display separator line for "Recent colors"
    echo '<div class="line-separator">________________________________</div><br>';
    echo '<div class="color-container">';
    echo '<div class="section-label">Recent colors</div>';
    // Display "Recent colors"
    for ($i = count($colors) - 10; $i < count($colors); $i++) {
        echo '<div class="color-box" style="background-color: ' . $colors[$i] . ';"></div>';
    }
    echo '</div>'; // Close the color container

    // Display separator line for "No fill colors"
    echo '<div class="line-separator">________________________________</div><br>';
    echo '<div class="color-container">';
    echo '<div class="section-label">No fill colors</div>';
    // Display one empty color box (no fill)
    echo '<div class="color-box"></div>';
    echo '</div>'; // Close the color container
    echo '<div class="line-separator">________________________________</div><br>';
    
    // Display "More colors with icons"
    echo '<div class="color-container">';
    echo '<div class="section-label">More colors </div>';
    // Example icons (you can replace these with your desired icons)
    $icons = ['🎨'];
    for ($i = 0; $i < count($icons); $i++) {
        echo '<div class="color-box">' . $icons[$i] . '</div>';
    }
    echo '</div>'; // Close the color container

    echo '<div class="line-separator">________________________________</div><br>';
    
   

    ?>

</body>
</html>
