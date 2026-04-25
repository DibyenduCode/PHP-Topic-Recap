<?php
include "conn.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 min-h-screen flex items-center justify-center">

    <div class="bg-white/20 backdrop-blur-lg shadow-xl rounded-2xl p-8 w-full max-w-md border border-white/30">
        
        <h2 class="text-2xl font-bold text-white text-center mb-6">
            Add Student
        </h2>

        <form action="" method="POST" class="space-y-5">
            
            <!-- Name -->
            <div>
                <label class="text-white text-sm">Full Name</label>
                <input type="text" name="name" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Enter name">
            </div>

            <!-- Class -->
            <div>
                <label class="text-white text-sm">Class</label>
                <input type="text" name="class" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Enter class">
            </div>

            <!-- Course -->
            <div>
                <label class="text-white text-sm">Course</label>
                <input type="text" name="course" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Enter course">
            </div>

            <!-- Year -->
            <div>
                <label class="text-white text-sm">Year</label>
                <input type="number" name="year" required
                    class="w-full mt-1 px-4 py-2 rounded-lg bg-white/30 text-white placeholder-white focus:outline-none focus:ring-2 focus:ring-white"
                    placeholder="Enter year">
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-white text-purple-600 font-semibold py-2 rounded-lg hover:bg-purple-100 transition duration-300" name="sub">
                Submit
            </button>

        </form>
    </div>

</body>
</html>

<?php

if(isset($_POST["sub"])){
    $name=$_POST["name"];
    $class=$_POST["class"];
    $course=$_POST["course"];
    $year=$_POST["year"];

    $insdata=$conn->prepare("INSERT INTO `students` (`id`, `name`, `class`, `course`, `year`) VALUES (NULL, '$name', '$class', '$course', '$year');");
    $dataexe=$insdata->execute();
    if($dataexe){
echo "Data Add Success";
    }
else{
    echo "data not add,";
}
}


?>