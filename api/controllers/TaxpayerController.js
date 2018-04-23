/**
 * TaxpayerController
 *
 * @description :: Server-side logic for managing taxpayers
 * @help        :: See http://sailsjs.org/#!/documentation/concepts/Controllers
 */

module.exports = {
	pin_verification:function(req,res){
			var data=req.param("data");
			data=JSON.parse(data);
			var pin=data.pin;
			Propertydetails.findOne({pin:pin}).exec(function (err, finn){
				if (err) {
			    return res.json({res:err,success:false})
			  }
			  if (!finn) {
			    return res.json({res:"PIN not found",success:false});
			  }
			  return res.json({res:finn,success:true});

			});

		},
		submit_property:function(req,res){
			var data=req.param("data");
			data=JSON.parse(data);
	
			var pin=data.pin;
			var total_land_area=data.total_land_area;
			var total_covered_area=data.total_covered_area;
			var category_residential=data.category_residential;
			var category_commercial=data.category_commercial;
			var total_no_of_floors=data.total_no_of_floors;

		// Appeal.findOne({pin:pin,status:'0'}).exec(function(er,re)
		// {
		// 	if(er)
		// 	{
		// 		console.log("Error 1");
		// 		return res.json({res:er,success:false});
		// 	}
		// 	if(!re)
		// 	{
		// 						console.log("Error 2");
		// 			Propertydetails.findOne({pin:pin}).exec(function (err,result) {
		// 				if(result.address!="undefined" || result || result !="undefined"){
		// 									console.log("Test");
		// 				Appeal.create({pin:pin,
		// 					total_covered_area:total_covered_area,
		// 					category_commercial:category_commercial,
		// 					total_land_area:total_land_area,
		// 					category_residential:category_residential,
		// 					total_no_of_floors:total_no_of_floors,status:"0",address:result.address}).exec(function (err, finn){
			 
		// 	  					if (err) {
		// 	  										console.log("Error 3");
		// 	   						return res.json({res:err,success:false});
		// 	    				}

		// 						else{
		// 											console.log("Error 4");
		// 	 						return res.json({res:finn,success:true,status:'1'});
		// 	 					}
		// 			});
		// 		}
		// 			else{
		// 								console.log("Error 5");
		// 				return res.json({success:"false"});
		// 		}
		// 		});
		// 	}
		// 				console.log("Error 6");
		// return res.json({res:re,success:true,status:'0'});	
		// });
			
		Appeal.findOne({pin:pin,status:'0'}).exec(function(er,re)
{
	if(!re)
	{
	
		Propertydetails.findOne({pin:pin}).exec(function (err,result) 
		{
			if(result.address!="undefined" || result || result !="undefined")
			{
				Appeal.create({pin:pin,
							total_covered_area:total_covered_area,
							category_commercial:category_commercial,
							total_land_area:total_land_area,
							category_residential:category_residential,
							total_no_of_floors:total_no_of_floors,status:"0",
							address:result.address}).exec(function (err, finn){
			 
			  					if (err) 
			  					{
			   						return res.json({success:false});
			    				}

								else
								{
			 						return res.json({success:true,status:'1'});
			 					}
					});
			}
			else
			{
				return res.json({success:"false"});
			}
		});
	}
else{
	return res.json({success:true,status:'0'});
}
});


		},

};

