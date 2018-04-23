/**
 * Recordfiles.js
 *
 * @description :: TODO: You might write a short summary of how this model works and what it represents here.
 * @docs        :: http://sailsjs.org/documentation/concepts/models-and-orm/models
 */

module.exports = {

 autoPk:true,
autoCreatedAt: true,
autoUpdatedAt: true,

  attributes: {

      appeal_id:{
        type:'int'
      },
  		pdfurl:{
  			type:'string'
  		},
  		pdfname:{
  			type:'string'
  		}
  		
  },
  tableName: 'recordfiles'
};

