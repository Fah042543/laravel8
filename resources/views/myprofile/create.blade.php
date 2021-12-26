<!-- this file location is /resources/views/myprofile/create.blade.php  -->

<h1>Create My Profile</h1>
<form action="#" method="POST">
	<div>
		<strong>Name : </strong>  
<input type="text" value="{{ request('name') }}"/>
</div>	
	<div>
		<strong>Lastname : </strong>
<input type="text" value="{{ request('lastname') }}"/>
</div>
	<div>
<strong>Email : </strong>
<input type="text" />
</div>
<div><button type="submit" >Add</button></div>
</form>
