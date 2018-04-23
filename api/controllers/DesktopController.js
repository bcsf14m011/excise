/**
 * DesktopController
 *
 * @description :: Server-side logic for managing Desktops
 * @help        :: See http://sailsjs.org/#!/documentation/concepts/Controllers
 */

module.exports = {
	
	login:function(req,res){
		console.log("Hello Login");


		var data=req.param("data");
		//data=JSON.parse(data);
		var uname=data.uname;
		var password=data.pass;

		console.log("Connecting");
		Login.findOne({uname:uname,password:password}).exec(function (err, finn){
			  if (err) {
			  	console.log("Conntecting error");
			    return res.json({res:err,success:false})
			  }
			  if (!finn) {
			    return res.json({res:"User not Present",success:false})
			  }
			  Employee.findOne({emp_id:finn.emp_id}).exec(function(err,empd){
			  	
			  if (err) {
			    return res.json({res:error,success:false})
			  }
			  		console.log("Success");
			  return res.json({res:data,success:true,desig:empd.designation});
			});
		});
	},

	newapp:function(req,res) {
		Appeal.find({status:"0"}).exec(function (error, data){
			  if (error) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"Appeal not Present",success:false})
			  }
			  return res.json({res:data,success:true});
				});
			
		
	},

	assapp:function(req,res) {
		Recordfiles.find().exec(function (error, data){
			  if (error) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"Appeal not Present",success:false})
			  }
			  return res.json({res:data,success:true});
				});
			
		
	},
	assign_inspector:function(req,res) {
				var data=req.param("data");
				//data=JSON.parse(data);
				var id=data.id;
				var abc=data.empid;
				var lengthOfempId=abc.length;
				var index =abc.indexOf("-");
				var newId=abc.substring(index+1,lengthOfempId);
				newId=parseInt(newId);


				
				Appeal.update({id:id},{emp_id:newId,
											status:"1"
										}).exec(function afterwards(err, updated){

						  if (err) {
						   return res.json({res:err,success:false})
						 }
						 else{
							  return res.json({success:true});
					}
												 });
		},
		viewapp:function(req,res){
			Appeal.find().exec(function (error, data){
			  if (error) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"No Appeals",success:false})
			  }
			  return res.json({res:data,success:true});
				});
		},

		getInspector:function(req,res) {
		Employee.find({designation:"Excise Inspector"}).exec(function (error, data){
			  if (error) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"Inspector not Present",success:false})
			  }

			  Appeal.find({status:"0"}).exec(function (errors, datas){
			  if (errors) {
			    return res.json({res:error,success:false})
			  }
			  if (!datas) {
			    return res.json({res:"Appeal not Present",success:false})
			  }
			  return res.json({success:true,res:data,ares:datas});
				});
			  
				});
			
		
	},

	stats:function(req,res){
		Appeal.find().exec(function (error, data){
			  if (error) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"Inspector not Present",success:false})
			  }
			  Appeal.find({status:"0"}).exec(function (errors, datas){
			  if (errors) {
			    return res.json({res:error,success:false})
			  }
			  if (!datas) {
			    return res.json({res:"Appeal not Present",success:false})
			  }
			  return res.json({success:true,totalapps:data,pendapps:datas});
				});
			  
				});
	},

	addemp:function(req,res){
		var data=req.param("data");
		//data=JSON.parse(data);
		var eid = data.eid;
		var uname=data.name;
		var cont=data.cont;
		var desig= data.desig;
		var postdiv= data.postdiv;
		var postz= data.postz;
		
		Employee.create({emp_id:eid,
							name:uname,
							contact_no:cont,
							designation:desig,
							posting_division:postdiv,
							posting_zone:postz}).exec(function (err, finn){
			 
			  					if (err) 
			  					{
			   						return res.json({success:false});
			    				}

								else
								{
			 						return res.json({success:true,status:'1'});
			 					}
					});
	},

	delemp:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;

		Employee.destroy({emp_id:eid}).exec(function (err){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true})
  			}
});
	},

	editemp:function(req,res)
	{
		var data=req.param("data");
		var eid = data.eid;
		var uname=data.name;
		var cont=data.cont;
		var desig= data.desig;
		var postdiv= data.postdiv;
		var postz= data.postz;

		Employee.update({emp_id:eid},{contact_no:cont, designation:desig, posting_division:postdiv, posting_zone:postz}).exec(function (err){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true});
  			}
	});
	},

	fetchemp:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;

		Employee.find({emp_id:eid}).exec(function (error, dat){
			if (error)
			{
				return res.negotiate(error);
			}
			else
			{
				return res.json({success:true, res:dat});
			}
	});

	},


	delLogin:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;

		Login.destroy({emp_id:eid}).exec(function (err){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true})
  			}
});
	},

	addLogin:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;
		var uname = data.uname;
		var pass = data.pass;

		Login.create({emp_id:eid, uname:uname, password:pass}).exec(function (err){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true})
  			}
	});
	},

	editLogin:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;
		var uname = data.uname;
		var pass = data.pass;

		Login.update({emp_id:eid},{uname:uname, password:pass}).exec(function (err){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true})
  			}
	});
	},

	fetchLogin:function(req,res)
	{
		var data = req.param("data");
		var eid = data.eid;
	
		Login.find({emp_id:eid}).exec(function (err,data){
  			if (err) {
    			return res.negotiate(err);
  			}
  			else
  			{
  				return res.json({success:true, data:data})
  			}
	});
	}

};