var ALV = function(config) {
	config = config || {};
	ALV.superclass.constructor.call(this,config);
};
Ext.extend(ALV,Ext.Component,{
	page:{},window:{},grid:{},tree:{},panel:{},combo:{},config: {},view: {}
});
Ext.reg('alv',ALV);

ALV = new ALV();