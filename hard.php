<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Exam - Hard</title>
    <h1 class = "heading-hard">DIFFICULTY: Hard</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            font-size:large;
        }
        .heading-hard{
            background-color: #183D3D;
            color: white;
            padding: 80px;
            font-size: 40px;
            padding-left:33%;
            margin:0;
        }
        .container{
            display: flex;
            justify-content: center;
            min-height: 100vh;
        }
        form {
            margin-top: 3%;
            width: 45%;            
            padding: 20px;
            background-color: #ACFADF;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
        }
        label {
            font-weight: bold;
        }

        .question {
            margin-bottom: 20px;
        }

        input[type="radio"] {
            margin-right: 10px;
        }

        input[type="submit"] {
            background-color: #445069;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .submit-hard{
            display: flex;
            justify-content: center;
            margin-top:20px;
        }
        .submit-hard input[type="submit"]{
            background-color:#183D3D;
        }
        ::-webkit-scrollbar {
            width: 12px;
        }
        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }
        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 10px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>
<body>
    <div class = "container">
        <form method="post" action="submit-hard.php">
                <label>1. Solve for x: 2x - 5 = 15.</label><br>
                <input type="radio" name="q1" value="a">x = 5<br>
                <input type="radio" name="q1" value="corect">x = 10<br>
                <input type="radio" name="q1" value="c"> x = 15<br>
                <input type="radio" name="q1" value="d">x = 20<br>
           
                <label>2. What is the value of π (pi) approximately equal to?</label><br>
                <input type="radio" name="q2" value="coorect">3.14<br>
                <input type="radio" name="q2" value="b">2.71<br>
                <input type="radio" name="q2" value="c">1.61<br>
                <input type="radio" name="q2" value="d"> 4.20<br>

                <label>3. If a triangle has angles measuring 30 degrees, 60 degrees, and 90 degrees, which type of triangle is it?</label><br>
                <input type="radio" name="q3" value="a">Equilateral<br>
                <input type="radio" name="q3" value="b">Isosceles<br>
                <input type="radio" name="q3" value="c">Scalene<br>
                <input type="radio" name="q3" value="correct">Right<br>

                <label>4. What is the square root of 144?</label><br>
                <input type="radio" name="q4" value="correct">6<br>
                <input type="radio" name="q4" value="b">8<br>
                <input type="radio" name="q4" value="c">10<br>
                <input type="radio" name="q4" value="d">12<br>

                <label>5. If a car travels at a speed of 60 miles per hour, how many miles will it travel in 4 hours?</label><br>
                <input type="radio" name="q5" value="a">120 miles<br>
                <input type="radio" name="q5" value="b">180 miles<br>
                <input type="radio" name="q5" value="correct">240 miles<br>
                <input type="radio" name="q5" value="d">300 miles<br>

                <label>6. What is the solution to the equation 3x + 4 = 16?</label><br>
                <input type="radio" name="q6" value="correct">x = 4<br>
                <input type="radio" name="q6" value="b">x = 5<br>
                <input type="radio" name="q6" value="c"> x = 6<br>
                <input type="radio" name="q6" value="d">x = 7<br>

                <label>7. If a circle has a radius of 5 centimeters, what is its circumference?</label><br>
                <input type="radio" name="q7" value="a"> 10π cm<br>
                <input type="radio" name="q7" value="b">15π cm<br>
                <input type="radio" name="q7" value="correct">20π cm<br>
                <input type="radio" name="q7" value="d">25π cm<br>

                <label>8. What is the sum of the interior angles of a hexagon?</label><br>
                <input type="radio" name="q8" value="a">120 degrees<br>
                <input type="radio" name="q8" value="b">360 degrees<br>
                <input type="radio" name="q8" value="correct">540 degrees<br>
                <input type="radio" name="q8" value="d">720 degrees<br>

                <label>9. Simplify: 2(3x + 5) - 4x.</label><br>
                <input type="radio" name="q9" value="a">2x + 10<br>
                <input type="radio" name="q9" value="correct">6x + 10<br>
                <input type="radio" name="q9" value="c">6x - 10<br>
                <input type="radio" name="q9" value="d">2x - 10<br>

                <label>10. If a box contains 12 red balls, 8 blue balls, and 6 green balls, what is the probability of drawing a blue ball at random?</label><br>
                <input type="radio" name="q10" value="a">1/3<br>
                <input type="radio" name="q10" value="correct">2/3<br>
                <input type="radio" name="q10" value="c">1/4<br>
                <input type="radio" name="q10" value="d">3/4<br>

                <label>11. What is the derivative of f(x) = 3x^2 - 2x + 5 with respect to x?</label><br>
                <input type="radio" name="q11" value="correct">6x - 2<br>
                <input type="radio" name="q11" value="b">3x^2 - 2<br>
                <input type="radio" name="q11" value="c">6x - 2x<br>
                <input type="radio" name="q11" value="d">3x^3 - 2x^2 + 5x<br>

                <label>12. Which trigonometric function is equal to the ratio of the length of the side opposite an angle to the length of the hypotenuse in a right triangle?</label><br>
                <input type="radio" name="q12" value="correct">Sine (sin)<br>
                <input type="radio" name="q12" value="b">Cosine (cos)<br>
                <input type="radio" name="q12" value="c">Tangent (tan)<br>
                <input type="radio" name="q12" value="d">Secant (sec)<br>

                <label>13. What is the value of log base 10 (1000)?</label><br>
                <input type="radio" name="q13" value="a">1<br>
                <input type="radio" name="q13" value="b">2<br>
                <input type="radio" name="q13" value="correct">3<br>
                <input type="radio" name="q13" value="d">4<br>

                <label>14. If a rectangular room measures 8 meters in length, 6 meters in width, and 3 meters in height, what is its volume?</label><br>
                <input type="radio" name="q14" value="correct">24 cubic meters<br>
                <input type="radio" name="q14" value="b">48 cubic meters<br>
                <input type="radio" name="q14" value="c">144 cubic meters<br>
                <input type="radio" name="q14" value="d">72 cubic meters<br>

                <label>15. What is the midpoint of the line segment with endpoints at (2, 4) and (6, 8)?</label><br>
                <input type="radio" name="q15" value="correct">(3, 6)<br>
                <input type="radio" name="q15" value="b">(4, 8)<br>
                <input type="radio" name="q15" value="c">(5, 10)<br>
                <input type="radio" name="q15" value="d">(7, 12)<br>

                <label>16. In a geometric progression, if the first term is 2 and the common ratio is 3, what is the third term?</label><br>
                <input type="radio" name="q16" value="a">6<br>
                <input type="radio" name="q16" value="b">9<br>
                <input type="radio" name="q16" value="correct">12<br>
                <input type="radio" name="q16" value="d">15<br>

                <label>17. If a polygon has 5 sides, what is it called?</label><br>
                <input type="radio" name="q17" value="a">Quadrilateral<br>
                <input type="radio" name="q17" value="correct">Pentagon<br>
                <input type="radio" name="q17" value="c">Hexagon<br>
                <input type="radio" name="q17" value="d">Octagon<br>

                <label>18. If a quadratic equation has no real solutions, what can be said about its discriminant?</label><br>
                <input type="radio" name="q18" value="a">Discriminant is positive<br>
                <input type="radio" name="q18" value="b">Discriminant is zero<br>
                <input type="radio" name="q18" value="correct">Discriminant is negative<br>
                <input type="radio" name="q18" value="d">Discriminant can be any value<br>

                <label>19. What is the value of sin(90 degrees)?</label><br>
                <input type="radio" name="q19" value="a">0<br>
                <input type="radio" name="q19" value="correct">1<br>
                <input type="radio" name="q19" value="c">-1<br>
                <input type="radio" name="q19" value="d">π/2<br>

                <label>20. If a function is even, what can be said about its symmetry?</label><br>
                <input type="radio" name="q20" value="correct">It has y-axis symmetry<br>
                <input type="radio" name="q20" value="b">It has x-axis symmetry<br>
                <input type="radio" name="q20" value="c">It has origin symmetry<br>
                <input type="radio" name="q20" value="d">It has rotational symmetry<br>

            <div class = "submit-hard">
            <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
