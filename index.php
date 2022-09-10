<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character Maker 0.1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
<p>Character Creator</p>
</div>
<div class="main">
    <div class="question" >
        <form action="process.php" method="post">
        <h1>General Info</h1>
        <div class="">

            <div class="wrappertext">
                <div class="text">
                    <label>Name: </label><br>
                </div>
                <div class="inputs">
                    <input name="Fname" type="text" placeholder="First Name">  <input name="Lname" type="text" placeholder=" Last Name"><br>
                </div>
            </div>
            <div class="wrappertext">
                <div class="text">
                    <label>age: </label>
                </div>
                <div class="inputs">
                    <input name="age" type="text" placeholder="Age" required>
                </div>
            </div>
            <div class="wrappertext">
                <div class="text">
                    <label>Gender: </label>
                </div>
                <div class="inputs">
                    <select name="sex" required>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Trans</option>
                        <option>Non-binary</option>
                        <option>Other</option>
                    </select>
                </div>
            </div>
            <div class="wrappertext">
                <div class="text">
                    <label>Occupation: </label>
                </div>
                <div class="inputs">
                    <input name="occupation" type="text" placeholder="Occupation" required>
                </div>
            </div>
            <div class="wrappertext">
                <div class="text">
                    <label>Orientation: </label>
                </div>
                <div class="inputs">
                    <input name="orientation" type="text" placeholder="orientation" required>
                </div>
            </div>
            <div class="wrappertext">
                <div class="text">
                    <label>Social Class: </label>
                </div>
                <div class="inputs">
                    <input name="SC" type="text" placeholder="Social Class" required>
                </div>
            </div>
        </div>
            <h1>Appearance</h1>
            <div class="">
                <div class="wrappertext">
                    <div class="text">
                        <label>Species: </label>
                    </div>
                    <div class="inputs">
                        <input name="species" type="text" placeholder="Species" required>
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="text">
                        <label>Height: </label>
                    </div>
                    <div class="inputs">
                        <input class="slider" name="height" type="range" value="170" min="35" max="305" oninput="h.value = this.value">
                        <output id="h">170 </output>CM
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="text">
                        <label>Weight: </label>
                    </div>
                    <div class="inputs">
                        <input class="slider" name="weight" type="range" value="80" min="35" max="400" oninput="w.value = this.value">
                        <output id="w">170 </output>kg
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="wrappertext wrapperpara">
                        <div class="textp">
                            <label>Physical Description: </label><br>
                        </div>
                        <div class="inputs">
                            <textarea name="pd" placeholder="Personality" class="para" cols="3" rows="3"> </textarea>
                        </div>
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="text">
                        <label>Apparel: </label>
                    </div>
                    <div class="inputs">
                        <textarea name="ap"  placeholder="Apparel" class="para"> </textarea>
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="text">
                        <label>Voice: </label>
                    </div>
                    <div class="inputs">
                        <input name="Voice" type="text" placeholder="Voice">
                    </div>
                </div>
                <div class="wrappertext">
                    <div class="text">
                        <label>Distinguishing Features: </label>
                    </div>
                    <div class="inputs">
                        <input name="df" type="text" placeholder="features">
                    </div>
                </div>
            </div>
                <h1>About</h1>
                <div class="">
                    <div class="wrappertext wrapperpara">
                        <div class="textp">
                            <label>Personality: </label><br>
                        </div>
                        <div class="inputs">
                            <textarea name="Pers" placeholder="Personality" class="para" cols="3" rows="3"> </textarea>
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Strengths: </label>
                        </div>
                        <div class="inputs">
                            <input name="stre" type="text" placeholder="strengths" class="longer">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Weaknesses: </label>
                        </div>
                        <div class="inputs">
                            <input name="weak" type="text" placeholder="weaknesses" class="longer">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>fears: </label>
                        </div>
                        <div class="inputs">
                            <input name="fears" type="text" placeholder="fears" class="longer">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Non-combat skills: (Max: 5) </label>
                        </div>
                        <div class="inputs">
                            <input name="nskills" type="text" placeholder="Skill1, Skill2, Skill3, Skill4, Skill5" required>
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Interests/Quirks: </label>
                        </div>
                        <div class="inputs">
                            <input name="inter" type="text" placeholder="Interests" >
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Religion: </label>
                        </div>
                        <div class="inputs">
                            <input name="rel" type="text" placeholder="Religion" >
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Past Occupation(s): </label>
                        </div>
                        <div class="inputs">
                            <input name="past" type="text" placeholder="Past Occupation" class="longer">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Goals: </label>
                        </div>
                        <div class="inputs">
                            <input name="goals" type="text" placeholder="Goals" class="longer">
                        </div>
                    </div>
                </div>
                <h1>Family</h1>
                <div class="">
                    <div class="wrappertext">
                        <div class="text">
                            <label>Father(s): </label><br>
                        </div>
                        <div class="inputs">
                            <input name="father" type="text" placeholder="Father">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Mother(s): </label><br>
                        </div>
                        <div class="inputs">
                            <input name="mother" type="text" placeholder="Mother">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Siblings: </label><br>
                        </div>
                        <div class="inputs">
                            <input name="sibling" type="text" placeholder="Siblings" class="longer">
                        </div>
                    </div>
                    <div class="wrappertext">
                        <div class="text">
                            <label>Pet(s): </label><br>
                        </div>
                        <div class="inputs">
                            <input name="pet" type="text" placeholder="Pets" class="longer">
                        </div>
                    </div>
                </div>

            </div>
        <input type="submit">
        </div>


</body>
</html>
