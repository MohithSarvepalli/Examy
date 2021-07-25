<?php include 'inc/header.php'; ?>
<style>
	.btn {
    width: 150px;
    background-color: #5995fd;
    border: none;
    outline: none;
    height: 49px;
    border-radius: 49px;
    color: #fff;
    text-transform: uppercase;
    font-weight: 600;
    margin: 10px 0;
    cursor: pointer;
    transition: 0.5s;
}

.btn:hover {
    background-color: #4d84e2;
}

</style>
<div class="container">
		<div class="row">
        <div class="col-lg-12 text-center">
				<h1 class="mt-5">EXAMY</h1>
				<p class="lead">An Online Exam System</p>
				<img src="img/regi.png"/>				
        </div>
        
        <div class="col-lg-12">
        <div class="form-group">
					<label for="exampleInputName">Name</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name">
					<small id="emailHelp" class="form-text text-muted">Enter your full name (Spaces allowed).</small>
        </div>
        
        <div class="form-group">
					<label for="exampleInputusername">Username</label>
					<input type="text" class="form-control" id="userName" name="userName" placeholder="Enter your username without spaces">
					<small id="emailHelp" class="form-text text-muted">Enter only the username</small>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password</label>
					<input type="password" name="password" id="password" class="form-control" placeholder="Password">
				</div>
        <button class="btn" type="submit" id="registersubm" value="Signup" class="btn btn-primary">Submit</button>
        <a  href="index.php">Already Registered? Login</a>
        </form>
        <br/><br/>
        <span id="state"></span>
        </div>
		</div>
  </div>
<?php include 'inc/footer.php'; ?>