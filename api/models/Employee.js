/**
 * Employee.js
 *
 * @description :: TODO: You might write a short summary of how this model works and what it represents here.
 * @docs        :: http://sailsjs.org/documentation/concepts/models-and-orm/models
 */

module.exports = {
autoPk:true,
autoCreatedAt: true,
autoUpdatedAt: true,
  attributes: {

 	emp_id:{
 		type:'integer',
 		 primaryKey: true,
 	},
 	name:{
 		type:'string'
 	},
 	contact_no:{
 		type:'string'
 	},
 	designation:{
 		type:'string'
 	},
 	posting_division:{
 		type:'string'
 	},
 	posting_zone:{
 		type:'string'
 	},

  },
  tableName:'Employee'
};

