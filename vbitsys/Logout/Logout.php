<hmtl>
<head><title>Logout</title>
</head>

<body >

<?php
session_start();
unset($_SESSION['ses_email']);
session_destroy(); 
header("Location: ../index.php");
?>

</body>
</html>