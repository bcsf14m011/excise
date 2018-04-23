/**
 * Taxpayer.js
 *
 * @description :: TODO: You might write a short summary of how this model works and what it represents here.
 * @docs        :: http://sailsjs.org/documentation/concepts/models-and-orm/models
 */

module.exports = {

autoPk:true,
autoCreatedAt: true,
autoUpdatedAt: true,

  attributes: {
  		cnic:{
  			type:'string',
  			primaryKey: true,
  		},
  		name:{
  			type:'string'
  		},
  		present_add:{
  			type:'string'
  		},
  		contact_no:{
  			type:'string'
  		},
  		
  },
    tableName: 'Taxpayer'
};

