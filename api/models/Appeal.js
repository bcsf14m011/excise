/**
 * Appeal.js
 *
 * @description :: TODO: You might write a short summary of how this model works and what it represents here.
 * @docs        :: http://sailsjs.org/documentation/concepts/models-and-orm/models
 */

module.exports = {
autoPk:true,
autoCreatedAt: true,
autoUpdatedAt: true,

  attributes: {

  		total_land_area:{
  			type:'string'
  		},
  		total_covered_area:{
  			type:'string'
  		},
  		category_residential:{
  			type:'string'
  		},
  		category_commercial:{
  			type:'string'
  		},
  		total_no_of_floors:{
  			type:'string'
  		},
  		pin:{
  			type:'string'
  		},
      address:{
        type:'string'
      },
      emp_id:{
        type:'integer'
      },
      status:{
        type:'string'
      },
  },
  tableName: 'Appeal'
};

