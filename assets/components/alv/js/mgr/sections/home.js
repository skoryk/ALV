ALV.page.Home = function(config) {
	config = config || {};
	Ext.applyIf(config,{
		components: [{
			xtype: 'alv-panel-home'
			,renderTo: 'alv-panel-home-div'
		}]
	}); 
	ALV.page.Home.superclass.constructor.call(this,config);
};
Ext.extend(ALV.page.Home,MODx.Component);
Ext.reg('alv-page-home',ALV.page.Home);