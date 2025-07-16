<!DOCTYPE html>
<html lang="en" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Select2 CSS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        @yield('content')
    </div>
<style>
/* Dark mode Select2 main selection area */
.dark .select2-container--default .select2-selection--single {
    background-color: #0F172A !important; /* Deep Navy */
    border-color: #2563EB !important;     /* Electric Blue border */
    color: #f9fafb !important;            /* Light text */
}

/* Selected country text in the box */
.dark .select2-container--default .select2-selection--single .select2-selection__rendered {
    background-color: #0F172A !important; /* Deep Navy background */
    color: #f9fafb !important;            /* Light text */
}

/* Dropdown arrow color */
.dark .select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: #f9fafb transparent transparent transparent !important;
}

/* Dropdown options background and text */
.dark .select2-container--default .select2-results > .select2-results__options {
    background-color: #0F172A !important; /* Deep Navy */
    color: #f9fafb !important;            /* Light text */
}

/* Highlighted option in dropdown */
.dark .select2-container--default .select2-results__option--highlighted[aria-selected] {
    background-color: #2563EB !important; /* Electric Blue hover */
    color: #ffffff !important;
}

/* Search box inside dropdown */
.dark .select2-container--default .select2-search--dropdown .select2-search__field {
    background-color: #0F172A !important; /* Deep Navy */
    color: #f9fafb !important;            /* Light text */
    border-color: #2563EB !important;     /* Electric Blue border */
}
</style>


    <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- Select2 JS -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('#country').select2({
        placeholder: "Select your country",
        allowClear: true,
        width: '100%',

    });
});
</script>

</body>
</html>
