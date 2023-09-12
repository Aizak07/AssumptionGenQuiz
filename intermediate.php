<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General Exam - Intermediate</title>
    <h1 class = "heading-int">DIFFICULTY: INTERMEDIATE</h1>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            font-size:large;
        }
        .heading-int{
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
        .submit-intermediate{
            display: flex;
            justify-content: center;
            margin-top:20px;
        }
        .submit-intermediate input[type="submit"]{
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
        <form method="post" action="submit-intermediate.php">
                <label>1. What is the process by which plants make their own food?</label><br>
                <input type="radio" name="q1" value="a">Respiration<br>
                <input type="radio" name="q1" value="correct">Photosynthesis<br>
                <input type="radio" name="q1" value="c">Digestion<br>
                <input type="radio" name="q1" value="d">Fermentation<br>
           
                <label>2. What is the smallest unit of life?</label><br>
                <input type="radio" name="q2" value="correct">Cell<br>
                <input type="radio" name="q2" value="b">Atom<br>
                <input type="radio" name="q2" value="c">Molecule<br>
                <input type="radio" name="q2" value="d">Organ<br>

                <label>3. What is the force that opposes motion between two surfaces that are in contact?</label><br>
                <input type="radio" name="q3" value="correct">Friction<br>
                <input type="radio" name="q3" value="b">Gravity<br>
                <input type="radio" name="q3" value="c">Inertia<br>
                <input type="radio" name="q3" value="d">Velocity<br>

                <label>4. What is the process by which an organism changes over time to better adapt to its environment</label><br>
                <input type="radio" name="q4" value="a">Evolution<br>
                <input type="radio" name="q4" value="b">Natural Selection<br>
                <input type="radio" name="q4" value="c">Mutation<br>
                <input type="radio" name="q4" value="correct">Adaptation<br>

                <label>5. What is the process by which a gas turns into a liquid?</label><br>
                <input type="radio" name="q5" value="a">sublimation<br>
                <input type="radio" name="q5" value="b">Evaporation<br>
                <input type="radio" name="q5" value="correct">condensation<br>
                <input type="radio" name="q5" value="d">Melting<br>

                <label>6. What is the process by which a solid turns into a gas without passing through the liquid</label><br>
                <input type="radio" name="q6" value="a">Condensation<br>
                <input type="radio" name="q6" value="correct">Sublimation<br>
                <input type="radio" name="q6" value="c">Evaporation<br>
                <input type="radio" name="q6" value="d">Melting<br>

                <label>7. What is the process by which a liquid turns into a gas?</label><br>
                <input type="radio" name="q7" value="correct">Evaporation<br>
                <input type="radio" name="q7" value="b">Condensation<br>
                <input type="radio" name="q7" value="c">Sublimation<br>
                <input type="radio" name="q7" value="d">Freezing<br>
                
                <label>8. What is the process by which a gas turns into a solid without passing through the liquid state?</label><br>
                <input type="radio" name="q8" value="correct">Deposition<br>
                <input type="radio" name="q8" value="b">Condensation<br>
                <input type="radio" name="q8" value="c">Sublimation<br>
                <input type="radio" name="q8" value="d">Melting<br>

                <label>9. What is the process by which a liquid turns into a solid?</label><br>
                <input type="radio" name="q9" value="correct">Freezing<br>
                <input type="radio" name="q9" value="b">Melting<br>
                <input type="radio" name="q9" value="c">Sublimation<br>
                <input type="radio" name="q9" value="d">Evaporation<br>

                <label>10. What is the process by which a solid turns into a liquid?</label><br>
                <input type="radio" name="q10" value="correct">Melting<br>
                <input type="radio" name="q10" value="b">Freezing <br>
                <input type="radio" name="q10" value="c">Sublimation<br>
                <input type="radio" name="q10" value="d">Evaporation<br>

                <label>11. What is the process by which a liquid changes into a solid or a gas?</label><br>
                <input type="radio" name="q11" value="a">Physical change<br>
                <input type="radio" name="q11" value="b">Chemical change<br>
                <input type="radio" name="q11" value="correct">Phase change<br>
                <input type="radio" name="q11" value="d">Nuclear change<br>

                <label>12. What is the process by which a substance changes its chemical composition?</label><br>
                <input type="radio" name="q12" value="a">Physical change<br>
                <input type="radio" name="q12" value="b">Physical change<br>
                <input type="radio" name="q12" value="correct">Chemical change<br>
                <input type="radio" name="q12" value="d">Nuclear change<br>

                <label>13. What is the force that attracts two objects with mass towards each other?</label><br>
                <input type="radio" name="q13" value="a">Velocity<br>
                <input type="radio" name="q13" value="b">Friction<br>
                <input type="radio" name="q13" value="c">Inertia<br>
                <input type="radio" name="q13" value="correct">Gravity<br>

                <label>14. What is the process by which energy is transferred from one object to another through a medium?</label><br>
                <input type="radio" name="q14" value="a">Reflection<br>
                <input type="radio" name="q14" value="b">Convection<br>
                <input type="radio" name="q14" value="c">Radiation<br>
                <input type="radio" name="q14" value="correct">Conduction<br>

                <label>15. What is the process by which energy is transferred from one object to another without a medium?</label><br>
                <input type="radio" name="q15" value="a">Conduction<br>
                <input type="radio" name="q15" value="correct">Radiation<br>
                <input type="radio" name="q15" value="c">Convection<br>
                <input type="radio" name="q15" value="d">Reflection<br>

                <label>16. What is the process by which light is bent as it passes through a medium?</label><br>
                <input type="radio" name="q16" value="a">Reflection<br>
                <input type="radio" name="q16" value="correct">Refraction<br>
                <input type="radio" name="q16" value="c">Diffraction<br>
                <input type="radio" name="q16" value="d">Absorption<br>

                <label>17. What is the process by which light bounces off a surface?</label><br>
                <input type="radio" name="q17" value="a">Diffraction<br>
                <input type="radio" name="q17" value="b">Refraction<br>
                <input type="radio" name="q17" value="correct">Reflection<br>
                <input type="radio" name="q17" value="d">Absorption<br>

                <label>18. What is the process by which light waves spread out as they pass through an opening or around an obstacle?</label><br>
                <input type="radio" name="q18" value="correct">Diffraction<br>
                <input type="radio" name="q18" value="b">Reflection<br>
                <input type="radio" name="q18" value="c">Refraction<br>
                <input type="radio" name="q18" value="d">Absorption<br>

                <label>19. What is the process by which sound waves bounce off a surface?</label><br>
                <input type="radio" name="q19" value="correct">Reflection<br>
                <input type="radio" name="q19" value="b">Refraction<br>
                <input type="radio" name="q19" value="c">Diffraction<br>
                <input type="radio" name="q19" value="d">Absorption<br>

                <label>20. What is the process by which sound waves bend as they pass through a medium?</label><br>
                <input type="radio" name="q20" value="correct">Refraction<br>
                <input type="radio" name="q20" value="b">Reflection<br>
                <input type="radio" name="q20" value="c">Diffraction<br>
                <input type="radio" name="q20" value="d">Absorption<br>
            <div class = "submit-intermediate">
            <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>
