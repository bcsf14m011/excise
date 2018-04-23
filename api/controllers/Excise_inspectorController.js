/**
 * Excise_inspectorController
 *
 * @description :: Server-side logic for managing excise_inspectors
 * @help        :: See http://sailsjs.org/#!/documentation/concepts/Controllers
 */

module.exports = {
	
	login:function(req,res){
		var data=req.param("data");
		data=JSON.parse(data);
		var uname=data.uname;
		var password=data.pass;
		Login.findOne({uname:uname,password:password}).exec(function (err, finn){
			  if (err) {
			    return res.json({res:err,success:false})
			  }
			  if (!finn) {
			    return res.json({res:"User not Present",success:false})
			  }
			  Employee.findOne({emp_id:finn.emp_id}).exec(function(err,empd){
			  	
			  Appeal.find({emp_id:finn.emp_id,status:"0"}).exec(function (error, data){
			  if (err) {
			    return res.json({res:error,success:false})
			  }
			  if (!data) {
			    return res.json({res:"Appeal not Present",success:false})
			  }
			  return res.json({res:data,success:true,emname:empd.name});
				});
			});
		});
	},
	submit_reassessment:function(req,res) {
				console.log("in submit_reassessment");
				var data=req.param("data");
				data=JSON.parse(data);
				console.log(data);

				var total_land_area=data.total_land_area;
				var total_covered_area=data.total_covered_area;
				var category_residential=data.category_residential;
				var category_commercial=data.category_commercial;
				var total_no_of_floors=data.total_no_of_floors;
				var appeal_id=data.appeal_id;
				console.log("starting update");
				Appeal.update({id:appeal_id},{total_land_area:total_land_area,
											total_covered_area:total_covered_area,
											category_commercial:category_commercial,
											category_residential:category_residential,
											total_no_of_floors:total_no_of_floors,
											status:"1"
										}).exec(function afterwards(err, updated){

						  if (err) {
						  	console.log("error in apeal update assessment");
						  	console.log(err);
						   return res.json({res:err,success:false})
						   //console.log("update error"); 
						 }
						 else{
						 	console.log("update successful assessment")
							  return res.json({success:true});
					}
												 });
		},

	submit_result_file:function(req,res) {

		var id=req.param("id");
		console.log("id"+id);
		req.file('files').upload({
			saveAs:"Results_"+id+".pdf",
			dirname:'../../assets/results/'
		},function(err,uploadFiles){
			if(err){
				return res.json({success:false});
			}	
			else{
				var fileName="Results_"+id+".pdf";
				var pdfurl = "http://localhost:1337/results/"+fileName;
				var pdfname = "Results_"+id+".pdf";

// 			  Appeal.find({id:id}).exec(function (error, data){
// 			  	console.log(data.status)
// 			  });
// Appeal.update({id:id},{status:'1'}).exec(function afterwards(err, updat){	});
// Appeal.find({id:id}).exec(function (error, data){
// 			  	console.log(data)
// 			  });

				Recordfiles.create({appeal_id:id,pdfurl:pdfurl,
									pdfname:pdfname,
										}).exec(function afterwards(er, updatd){

						  if (err) {
						  	console.log("Recordfiles not working")
						   return res.json({success:false}) 
						 }
						else
						{
							Appeal.update({id:id},{status:'1'}).exec(function afterwards(err, updat){
							 if(err)
							 {
							 	console.log("appeal update not working");
							 	console.log(err);
							 }
							 else{
							 	console.log("appeal working");
							 	console.log(updat);
								return res.json({success:true});

							}	
						});
							  
						}
					
						 });
			}
		});
		},
};