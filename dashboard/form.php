<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entry Form</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="form">
    <form action="dashboard.php" method="POST" enctype="multipart/form-data">
        <div class="title">Welcome</div>
        <div class="subtitle">Enter your details!</div>

        <!-- Input for Details -->
        <div class="input-container ic1">
            <textarea id="details" class="input" placeholder=" " name="nm"></textarea>
            <label for="details" class="placeholder">Details</label>
        </div>

        <!-- Input for Skills -->
        <div class="input-container ic2">
        <textarea id="details" class="input" placeholder=" " name="skll"></textarea>
            <label for="skills" class="placeholder">Skills</label>
        </div>

        <!-- Input for tasks -->
        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t1" />
            <label for="extra" class="placeholder">Task 1</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t2" />
            <label for="extra" class="placeholder">Task 2</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t3" />
            <label for="extra" class="placeholder">Task 3</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t4" />
            <label for="extra" class="placeholder">Task 4</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t5" />
            <label for="extra" class="placeholder">Task 5</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t6" />
            <label for="extra" class="placeholder">Minor Project Module</label>
        </div>

        <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="t7" />
            <label for="extra" class="placeholder">Database Module</label>
        </div>

        <!-- Input for Projects -->
        <div class="input-container ic2">
        <textarea id="details" class="input" placeholder=" " name="pro"></textarea>
            <label for="projects" class="placeholder">Projects</label>
        </div>

         <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="google" />
            <label for="extra" class="placeholder">google sites</label>
        </div>

         <div class="input-container ic2">
            <input id="extra" class="input" type="text" placeholder="" name="git" />
            <label for="extra" class="placeholder">github</label>
        </div>
        <div class="input-container ic2">
            <input id="extra" class="input" type="file" placeholder="" name="img1" />
            <label for="extra" class="placeholder">header img</label>
        
         <div class="input-container ic2">
            <input id="extra" class="input" type="file" placeholder="" name="img2" />
            <label for="extra" class="placeholder">footer img</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="submit">Submit</button>
    </form>
</div>

</body>

</html>
<style>
body {
  align-items: center;
  background-color: #000000;
  display: flex;
  justify-content: center;
  height: 100vh;
}

.form {
  background-color: #ffffff;
  border-radius: px;
  box-sizing: border-box;
  height: 650px; /* Fixed height */
  padding: 20px;
  width: 520px;
  overflow-y: auto; /* Enable vertical scrolling */
  scroll-behavior: smooth; /* Smooth scrolling */
}

.form::-webkit-scrollbar {
  display: none; /* For Chrome, Safari, and Opera */
}

.title {
  color: black;
  font-family: sans-serif;
  font-size: 36px;
  font-weight: 600;
  margin-top: 30px;
  position: sticky;
}

.subtitle {
  color: dimgray;
  font-family: sans-serif;
  font-size: 14px;
  font-weight: 450;
  margin-top: 10px;
}

.input-container {
  height: 40px;
  position: relative;
  width: 70%;
}

.ic1 {
  margin-top: 40px;
}

.ic2 {
  margin-top: 30px;
}

.input {
  background-color: silver;
  border-radius: 10px;
  border: 0;
  box-sizing: border-box;
  color: black;
  font-size: 20px;
  height: 100%;
  outline: 0;
  padding: 4px 20px 0;
  width: 100%;
}

.cut {
  background-color: #15172b;
  border-radius: 10px;
  height: 20px;
  left: 20px;
  position: absolute;
  top: -20px;
  transform: translateY(0);
  transition: transform 200ms;
  width: 76px;
}

.cut-short {
  width: 50px;
}

.input:focus ~ .cut,
.input:not(:placeholder-shown) ~ .cut {
  transform: translateY(8px);
}

.placeholder {
  color: #65657b;
  font-family: sans-serif;
  left: 20px;
  line-height: 14px;
  pointer-events: none;
  position: absolute;
  transform-origin: 0 50%;
  transition: transform 200ms, color 200ms;
  top: 20px;
}

.input:focus ~ .placeholder,
.input:not(:placeholder-shown) ~ .placeholder {
  transform: translateY(-30px) translateX(10px) scale(0.75);
}

.input:not(:placeholder-shown) ~ .placeholder {
  color: #808097;
}

.input:focus ~ .placeholder {
  color: #dc2f55;
}

.submit {
  background-color: #08d;
  border-radius: 12px;
  border: 0;
  box-sizing: border-box;
  color: #eee;
  cursor: pointer;
  font-size: 18px;
  height: 50px;
  margin-top: 38px;
  // outline: 0;
  text-align: center;
  width: 100%;
}

.submit:active {
  background-color: #06b;
}
</style>
