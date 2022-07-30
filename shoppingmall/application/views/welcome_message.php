<html>
	<head>
		<style>
@import url('https://fonts.googleapis.com/css?family=Josefin+Sans');


body {
  background: #e2e1e0;
}

h3 {
  font-size: 18px;
  line-height: 24px;
}

span {
  width:125px;
  height:125px;
  margin: 0px 10px;
  cursor: pointer;
  z-index: 1000;
}

span::after {
  font-family: "Font Awesome 5 Free";
    font-family: Josefin Sans, sans-serif;
  width:125px;
  height:125px;
  box-sizing: border-box;
  content: '\f044' attr(value);
  text-align: center;
  display: inline-block;
  font-size: 16px;
  list-style-type: none;
  background: #fff;
  border-radius: 10px;
  z-index: 999;
  box-shadow: 0 3px 20px rgba(39,79,45,0.16), 0 1px 6px rgba(39,79,45,0.23);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
  cursor: pointer;
  padding: 85px 0px 0px 0px;
}

span:checked::after {
  border: 3px solid #6ae682;
  cursor: pointer;
  color: #69e47c;
  font-weight: 700;
}

span:hover::after {
  box-shadow: 0 14px 28px rgba(68,140,79,0.25), 0 5px 10px rgba(68,140,79,0.22);
}

h1 {
  text-transform: uppercase;
  font-weight: 700;
  line-height: 60px;
  font-size: 40px;
}

.card {
  width: 850px;
  background: #69e47c;
  margin: 40px auto;
  border-radius: 10px;
  box-shadow: 0 15px 38px rgba(0,0,0,0.1), 0 15px 40px rgba(0,0,0,0.1);
}

.card-title {
  text-align: center;
  padding: 40px 40px 80px 40px;
  border-radius: 10px 10px 0px 0px;
  background: #fff;
}

.user-select {
  height: 65px;
  text-align: center;
  background:#fff;
}




.new-user {
  float: left;
  width: 100px;
  text-align: right;
  padding: 10px 10px 0px 0px;
}

.new {
  float: right;
  
}

.tile_{
	display: flex;
	justify-content: center;
	padding: 2rem;
}
		</style>
	</head>
	<body>
		<div class="card">
			<div class="card-title">
				<h1>Welcome to UNT Malls</h1>
				<h3>
					<b>Please select user type</b>
				</h3>
			</div>
			<div class="tile_">
				<a href="<?php echo base_url('Proprietor'); ?>">
					<span id="adm" type="radio" name="user-type" value="Proprietor" ></span>
				</a>
				
				<a href="<?php echo base_url('Manager'); ?>">
					<span type="radio" name="user-type" value="Manager"></span>
				</a>
				
				<a href="<?php echo base_url('Patron'); ?>">
					<span type="radio" name="user-type"  value="Patron"></span>
				</a>
			</div>
				
		</div>
	</body>
</html>