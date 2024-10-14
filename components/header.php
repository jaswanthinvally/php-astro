<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Restaurant Menu'; ?></title> <!-- Dynamic Page Title -->
    
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;700&display=swap" rel="stylesheet">
    <script src="https://translate.google.com/translate_static/js?client=client-name&hl=en"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',  // Default page language (English)
                includedLanguages: 'en,ta,hi,kn,ml,te', // Supported languages: English, Tamil, Hindi, Kannada, Malayalam, Telugu
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</head>
<body>
<header class="header-main">
    <nav class="header-nav flex justify-around font-semibold"> <!-- Corrected 'jusify-around' to 'justify-around' -->
        
        <ul>
            <li>sample site</li>
        </ul>

        <ul class="flex gap-3">
            <li>sample@gmail.com</li>
            <li>xxxxxxxxxx</li>
        </ul>

        <ul class="flex header-ul gap-3 mr-4 ">
            <li><a href="../pages/home.php">Home</a></li>
            <li><a href="./pages/service.php">Services</a></li>
            <li><a href="./pages/works.php">about</a></li>
            <li class="call-icon rounded-md p-1"><a href="tel:+1234567890">Call Now 📞</a></li>
        </ul>
        <div   
        id="google_translate_element"></div>
    </nav> 
</header>

</body>
</html>
