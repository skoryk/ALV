ALV.panel.Home = function(config) {
	config = config || {};
	Ext.apply(config,{
		border: false
		,baseCls: 'modx-formpanel'
		,items: [{
			html: '<h2>'+_('alv')+'</h2>'
			,border: false
			,cls: 'modx-page-header container'
		},{
			xtype: 'modx-tabs'
			,bodyStyle: 'padding: 10px'
			,defaults: { border: false ,autoHeight: true }
			,border: true
			,activeItem: 0
			,hideMode: 'offsets'
			,items: [{
				title: _('alv_items')
				,items: [{
					html: _('alv_intro_msg')
					,border: false
					,bodyCssClass: 'panel-desc'
					,bodyStyle: 'margin-bottom: 10px'
				},{
					xtype: 'alv-grid-items'
					,preventRender: true
				}]
			}]
		}]
	});
	ALV.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(ALV.panel.Home,MODx.Panel);
Ext.reg('alv-panel-home',ALV.panel.Home);
