/**
 * Propertydetails.js
 *
 * @description :: TODO: You might write a short summary of how this model works and what it represents here.
 * @docs        :: http://sailsjs.org/documentation/concepts/models-and-orm/models
 */

module.exports = {
autoPk:true,
autoCreatedAt: true,
autoUpdatedAt: true,

  attributes: {
  	pin:{
  		type:'string',
  		 primaryKey: true,
  	},
  	address:{
  		type:'string'
  	},
  	total_land_area:{
  		type:'integer'
  	},
  	total_covered_area:{
  		type:'integer'
  	},
  	category_residential:{
  		type:'string'
  	},
  	category_commercial:{
  		type:'string'
  	},
  	total_no_of_floors:{
  		type:'integers'
  	},
  	city:{
  		type:'string'
  	},
  	zone:{
  		type:'string'
  	},
  	cnic:{
  		type:'string'
  	},
  },
  tableName:'Propertydetails'
};

