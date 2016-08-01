/**
 * 封装表单验证
 * 
 * 用法：
 * */
! function(w) {

	function validate(formId) {
		if (!formId) {
			throw new Error("您还没有设置form元素的id属性，例如：ValidateJoden('testForm');");
		}
		var form = document.getElementById(formId);
		var valiInputs = [];
		var formStyle = {
			fixedTip:false,
			fixedTipDomId:'validateTip',
			skin: "", //皮肤（未支持）
			tipPosition: "right" //有四种位置可以选 top right bottom left 默认为right
		};
		return {
			/*对象继承方法*/
			"extend": function(destination, source) {
				for (var property in source) {
					destination[property] = source[property]; // 利用动态语言的特性, 通过赋值动态添加属性与方法
				}
				return destination; // 返回扩展后的对象
			},
			/*设置提示样式*/
			"setStyle": function(options) {
				formStyle = this.extend(formStyle, options);
				return this;
			},
			/*取消验证某一个表单*/
			"remove": function(inputId) {
				var match = false;
				if (valiInputs.length > 0) {
					for (var i = 0; i < valiInputs.length; i++) {
						if (valiInputs[i][0] == inputId) {
							valiInputs.splice(i, 1);
						}
					}
				}
			},
			/*当前表单验证合法返回对象this,验证不通过返回false*/
			"when": function(inputId, rules) {
				//将当前的表单添加到提交验证数组里
				valiInputs.push([inputId, rules]);

				//一次验证
				var _this = this;
				var inputDom = document.getElementById(inputId);
				//设置单个输入框的提示位置
				var tipPosition = formStyle.tipPosition;
				if (rules.tipPosition) {
					tipPosition = rules.tipPosition
				}
				inputDom.onfocus = function() {
					if (rules.required) {
						_this.updateTip(tipPosition, inputId, "default", rules.defaultTips || "必填");
					}
				}
				inputDom.onblur = function() {
					_this.validateInput(inputId, rules);
				}
				return this;
			},
			/*提交验证*/
			"all": function() {
				var result = true;
				var _this = this;
				form.onsubmit = function() {
					if (valiInputs.length > 0) {
						for (var i = 0; i < valiInputs.length; i++) {
							result = _this.validateInput(valiInputs[i][0], valiInputs[i][1]);
							if (!result) {
								document.getElementById(valiInputs[i][0]).focus();
								return result;
							}
						}
					}
				}
				return result ? this : false;
			},
			"checkBeforeSubmit": function() {
				var result = true;
				var _this = this;
				if (valiInputs.length > 0) {
					for (var i = 0; i < valiInputs.length; i++) {
						result = _this.validateInput(valiInputs[i][0], valiInputs[i][1]);
						if (!result) {
							document.getElementById(valiInputs[i][0]).focus();
							return result;
						}
					}
				}
				return result ? this : false;
			},
			/*主验证*/
			"validateInput": function(inputId, rules) {
				var inputDom = document.getElementById(inputId);
				var objValue = inputDom.value;
				var tipPosition = formStyle.tipPosition;
				
				//设置单个输入框的提示位置
				if(rules.tipPosition){
					tipPosition = rules.tipPosition
				}
				
				//验证是否是必填
				if (rules.required) {
					if (objValue == null || this.trim(objValue) == "") {
						this.updateTip(tipPosition, inputId, "false", rules.nullTips || "必填");
						return false;
					}
				}

				//限定字符长度
				if (rules.rangeLength) {
					if(!rules.required && objValue==''){
						return true;
					}
					if (objValue.length < rules.rangeLength[0] || objValue.length > rules.rangeLength[1]) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "长度必须为" + rules.rangeLength[0] + "至" + rules.rangeLength[1] + "位之间！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//-1为不限制
				if (rules.length != -1) {
					if(!rules.required && objValue==''){
						return true;
					}
					if (objValue.length > rules.length) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || '长度不能超过' + valiInput.length);
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//电子邮箱
				if (rules.email) {
					if(!rules.required && objValue==''){
						return true;
					}
					var myreg = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
//					var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
					if (!myreg.test(objValue)) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "邮箱格式不正确！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}
				//手机号码
				if (rules.mobileNum) {
					if(!rules.required && objValue==''){
						return true;
					}
					if (!(/^1[3|4|5|8][0-9]\d{8}$/.test(objValue))) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "手机号码格式不正确！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//0-255位汉字
				if (rules.chinese) {
					if(!rules.required && objValue==''){
						return true;
					}
					var myreg = /^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]){0,255}$/;
					if (!myreg.test(objValue)) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "这里只支持中文！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//真实姓名
				if (rules.realName) {
					if(!rules.required && objValue==''){
						return true;
					}
					var myreg = /^([\u4E00-\uFA29]|[\uE7C7-\uE7F3]|[\w-]){2,15}$/;
					if (!myreg.test(objValue)) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "请输入真实姓名！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//密码
				if (rules.password) {
					if(!rules.required && objValue==''){
						return true;
					}
					var myreg = /^[a-z0-9_\W-]{6,20}$/;
					if (!myreg.test(objValue)) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "密码格式不正确！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//检测是否一致
				if (rules.equalTo) {
					if(!rules.required && objValue==''){
						return true;
					}
					var equalValue = document.getElementById(rules.equalTo).value;
					if (objValue !== equalValue) {
						this.updateTip(tipPosition, inputId, "false", rules.falseTips || "两次输入不一致！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//ajax回调验证
				if (rules.ajax) {
					if(!rules.required && objValue==''){
						return true;
					}
					var message = rules.ajax.call(inputDom, objValue);
					if (!message.success) {
						this.updateTip(tipPosition, inputId, "false", message.data);
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//复选框必须选中
				if (rules.checked) {
					if(!rules.required && objValue==''){
						return true;
					}
					if (!inputDom.checked) {
						this.updateTip(tipPosition, inputId, "false", rules.nullTips || "此处需选中！");
						return false;
					}else{
						this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
					}
				}

				//如果是必填，那么修改插入信息
				if (rules.required || rules.checked) {
					this.updateTip(tipPosition, inputId, "true", rules.trueTips || " ");
				}

				//密码强度
				if (rules.passwordStrength) {
					if(!rules.required && objValue==''){
						return true;
					}
					
					var strength = 0;
					
					if (objValue.match(/[a-z]/g) || objValue.match(/[0-9]/g)) {
						strength = 1;
//						this.updateTip(tipPosition, inputId, "true", "太弱！");
					}

					if (objValue.match(/[a-z]/g) && objValue.match(/[0-9]/g)) {
						strength = 2;
//						this.updateTip(tipPosition, inputId, "true", "一般！");
					}

					if (objValue.match(/[a-z]/g) && objValue.match(/[0-9]/g) && objValue.match(/(.[^a-z0-9])/g)) {
						strength = 3;
//						this.updateTip(tipPosition, inputId, "true", "很强！");
					}
					
					rules.passwordStrength.call(inputDom, objValue, strength);

				}

				return this;
			},
			/*默认提示信息*/
			"updateTip": function(tipPosition, inputId /*验证表单Id*/ , tipType /*提示信息类型*/ , tips /*提示信息*/ ) {
				var Dom = document.getElementById(inputId);
				if (tipType === "false") {
					this.addClass(Dom, "false");
				} else {
					this.removeClass(Dom, "false");
				}
				var tipDom;
				if(formStyle.fixedTip){
					tipDom = document.getElementById(formStyle.fixedTipDomId);
				}else{
					tipDom = document.getElementById(inputId + "-tip");
				}
				tipDom.className = "tip" + " tip-" + tipType + " tip-" + tipPosition;
				tipDom.innerHTML = tips || " ";
			},
			/*检测Dom元素有没有指定名称的class*/
			"hasClass": function(Dom, _className) {
				return Dom.className.match(new RegExp('(\\s|^)' + _className + '(\\s|$)'));
			},
			/*给指定Dom元素添加class*/
			"addClass": function(Dom, _className) {
				if (!this.hasClass(Dom, _className)) Dom.className += " " + _className;
			},
			/*给指定Dom元素删除class*/
			"removeClass": function(Dom, _className) {
				if (this.hasClass(Dom, _className)) {
					var reg = new RegExp('(\\s|^)' + _className + '(\\s|$)');
					Dom.className = Dom.className.replace(reg, ' ');
				}
			},
			/*给指定Dom元素添加/删除class*/
			"toggleClass": function(Dom, _className) {
				if (this.hasClass(Dom, _className)) {
					this.removeClass(Dom, _className);
				} else {
					this.addClass(Dom, _className);
				}
			},
			/*删除字符串左右两端的空格*/
			"trim": function(str) {
				return str.replace(/(^\s*)|(\s*$)/g, "");
			},
			/*删除字符串左边的空格*/
			"ltrim": function(str) {
				return str.replace(/(^\s*)/g, "");
			},
			/*删除字符串右边的空格*/
			"rtrim": function(str) {
				return str.replace(/(\s*$)/g, "");
			}
		};
	};

	function validateCMD(formId) {
		return new validate(formId);
	};

	//以下代码可以将validate封装为模块，直接应用于模块中
	"function" === typeof define ? define(function() {
		return validateCMD
	}) : function() {
		//用joden作为命名空间
		ValidateJoden = validateCMD;
	}()

}(window)