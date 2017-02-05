var customMatchers = {
	toBeGoofy: function(util, customEqualityTesters) {
		return {
			compare: function (actual, expected) {
				var result = {
					pass: true,
					message: 'you made it, bro!'
				};

				return result;
			}
		};
	}
};


describe("Custom matcher: 'toBeGoofy'", function() {
  beforeEach(function() {
    jasmine.addMatchers(customMatchers);
  });

  it("is available on an expectation", function() {
    expect({}).toBeGoofy();
  });

  it("can be negated", function() {
    expect({}).not.toBeGoofy();
  });
});
