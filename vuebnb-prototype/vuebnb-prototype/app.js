function escapeKeyListener(evt){
	if(evt.keyCode === 27 && app.modalOpen){
		app.modalOpen = false;
	}
}

var app = new Vue({
	el:"#app",
	data : {						// basic reactive instances
		bugHook : "RUNNING",
		title: sample.title,
		address: sample.address,
		about: sample.about,
		headerImageStyle : {
		"background-image" : "url(sample/header.jpg)"
		},
		amenities: sample.amenities,
		prices: sample.prices,
		contracted: true,
		modalOpen: false
	},
	
	watch : {						// Reactivity
		modalOpen : function(){
			var className = 'modal-open';
			if (this.modalOpen){
				document.body.classList.add(className);
			} else {
				document.body.classList.remove(className)
			}
		}
	},

	beforeCreate:function(){
		console.log("Before: " + this.bugHook); // undef
	},
	created: function(){
		console.log("After: "+ this.bugHook);	// def
		document.addEventListener('keyup', escapeKeyListener);
	}

});

