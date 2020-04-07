<?php

return [
	/*
	|--------------------------------------------------------------------------
	| Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| The following language lines contain the default error messages used by
	| the validator class. Some of these rules have multiple versions such
	| as the size rules. Feel free to tweak each of these messages here.
	|
	*/
	'accepted' => 'Trường này phải được chấp nhận.',
	'active_url' => 'Trường này không phải là một đường dẫn URL.',
	'after' => 'Ngày kết thúc phải lớn hơn ngày bắt đầu.',
	'after_or_equal' => 'Ngày kết thúc phải lớn hơn hoặc bằng ngày bắt đầu.',
	'alpha' => 'Trường này chỉ có thể chứa các chữ cái.',
	'alpha_dash' => 'Trường này chỉ có thể chứa các chữ cái, số và dấu gạch ngang.',
	'alpha_num' => 'Trường này chỉ có thể chứa các chữ cái và số.',
	'array' => 'Trường này phải là một danh sách.',
	'before' => 'Ngày bắt đầu phải nhỏ hơn ngày kết thúc.',
	'before_or_equal' => 'Ngày bắt đầu phải nhỏ hơn hoặc bằng ngày kết thúc.',
	'between' => [
		'numeric' => 'Giá trị phải trong khoảng :min và :max.',
		'file' => 'Dung lượng phải từ :min đến :max KB.',
		'string' => 'Giá trị phải từ :min đến :max ký tự.',
		'array' => 'Trường này phải có từ :min đến :max mục.',
	],
	'boolean' => 'Trường này phải là true hoặc false.',
	'confirmed' => 'Trường mật khẩu xác nhận không khớp.',
	'date' => 'Trường này không phải là một ngày hợp lệ.',
	'date_equals' => 'Trường này phải là kiểu ngày và có giá trị bằng :date.',
	'date_format' => 'Trường này không phù hợp với định dạng :format.',
	'different' => 'Trường :attribute và :other phải khác nhau.',
	'digits' => 'Trường này phải chứa :digits ký tự số.',
	'digits_between' => 'Trường này phải chứa từ :min đến :max ký số.',
	'dimensions' => 'Kích thước hình ảnh không phù hợp.',
	'distinct' => 'Trường này có một giá trị trùng lặp.',
	'email' => 'Trường này phải là một địa chỉ email hợp lệ.',
	'ends_with' => 'Trường này phải kết thúc bằng: :values',
	'exists' => 'Trường được chọn không hợp lệ.',
	'file' => 'Trường này phải là một tập tin.',
	'filled' => 'Trường này bắt buộc phải nhập.',
	'gt' => [
		'numeric' => 'Giá trị phải lớn hơn :value.',
		'file' => 'Dung lượng phải lớn hơn :value KB.',
		'string' => 'Trường này phải nhiều hơn :value ký tự.',
		'array' => 'Trường này phải chứa nhiều hơn :value mục.',
	],
	'gte' => [
		'numeric' => 'Giá trị phải lớn hơn hoặc bằng :value.',
		'file' => 'Dung lượng phải lớn hơn hoặc bằng :value KB.',
		'string' => 'Trường này phải nhiều hơn hoặc bằng :value ký tự.',
		'array' => 'Trường này phải chứa nhiều hơn hoặc bằng :value mục.',
	],
	'image' => 'Trường này phải là một hình ảnh.',
	'in' => 'Trường được chọn không hợp lệ.',
	'in_array' => 'Trường này không tồn tại trong :other.',
	'integer' => 'Trường này phải là số nguyên.',
	'ip' => 'Trường này phải là một địa chỉ IP hợp lệ.',
	'ipv4' => 'Trường này phải là một địa chỉ IPv4 hợp lệ.',
	'ipv6' => 'Trường này phải là một địa chỉ IPv6 hợp lệ.',
	'json' => 'Trường này phải là một chuỗi JSON hợp lệ.',
	'lt' => [
		'numeric' => 'Giá trị phải nhỏ hơn :value.',
		'file' => 'Dung lượng phải nhỏ hơn :value KB.',
		'string' => 'Trường này phải ít hơn :value ký tự.',
		'array' => 'Trường này phải chứa ít hơn :value mục.',
	],
	'lte' => [
		'numeric' => 'Giá trị phải nhỏ hơn hoặc bằng :value.',
		'file' => 'Dung lượng phải nhỏ hơn hoặc bằng :value KB.',
		'string' => 'Trường này phải ít hơn hoặc bằng :value ký tự.',
		'array' => 'Trường này phải chứa ít hơn hoặc bằng :value mục.',
	],
	'max' => [
		'numeric' => 'Giá trị không được lớn hơn :max.',
		'file' => 'Dung lượng không được vượt quá :max KB.',
		'string' => 'Trường này không được vượt quá :max ký tự.',
		'array' => 'Trường này không được có quá :max mục.',
	],
	'mimes' => 'Trường này phải là một tập tin kiểu: :values.',
	'mimetypes' => 'Trường này phải là một tập tin kiểu: :values.',
	'min' => [
		'numeric' => 'Giá trị trường này phải tối thiểu là :min.',
		'file' => 'Tập tin phải có dung lượng tối thiểu :min KB.',
		'string' => 'Trường này phải có ít nhất :min ký tự.',
		'array' => 'Trường này phải có ít nhất :min mục.',
	],
	'not_in' => 'Trường được chọn không hợp lệ.',
	'not_regex' => 'Trường này sai định dạng.',
	'numeric' => 'Trường này phải là một số.',
	'password' => 'Mật khẩu không đúng.',
	'present' => 'Trường này phải tồn tại.',
	'regex' => 'Trường này sai định dạng.',
	'required' => 'Trường này bắt buộc phải nhập.',
	'required_if' => 'Trường này bắt buộc nhập khi :other là :value.',
	'required_unless' => 'Trường này bắt buộc nhập trừ khi :other là :values.',
	'required_with' => 'Trường này bắt buộc nhập khi tồn tại :values.',
	'required_with_all' => 'Trường này bắt buộc nhập khi tồn tại :values.',
	'required_without' => 'Trường này bắt buộc nhập khi không tồn tại :values.',
	'required_without_all' => 'Trường này bắt buộc nhập khi không tồn tại :values.',
	'same' => 'Trường :attribute và :other phải có giá trị trùng khớp.',
	'size' => [
		'numeric' => 'Trường này phải có giá trị bằng :size.',
		'file' => 'Tập tin phải có dung lượng bằng :size KB.',
		'string' => 'Trường này phải chứa :size ký tự.',
		'array' => 'Trường này phải chứa :size mục.',
	],
	'starts_with' => 'Trường này phải bắt đầu bằng: :values',
	'string' => 'Trường này phải là một chuỗi.',
	'timezone' => 'Trường này phải là múi giờ hợp lệ.',
	'unique' => 'Thông tin đã tồn tại trong hệ thống.',
	'uploaded' => 'Không thể upload tập tin.',
	'url' => 'Trường này phải là một đường dẫn hợp lệ.',
	'uuid' => 'Trường này phải là một UUID hợp lệ.',
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Language Lines
	|--------------------------------------------------------------------------
	|
	| Here you may specify custom validation messages for attributes using the
	| convention "attribute.rule" to name the lines. This makes it quick to
	| specify a specific custom language line for a given attribute rule.
	|
	*/
	'custom' => [
		'attribute-name' => [
			'rule-name' => 'custom-message',
		],
	],
	
	/*
	|--------------------------------------------------------------------------
	| Custom Validation Attributes
	|--------------------------------------------------------------------------
	|
	| The following language lines are used to swap our attribute placeholder
	| with something more reader friendly such as "E-Mail Address" instead
	| of "email". This simply helps us make our message more expressive.
	|
	*/
	'attributes' => [],
];