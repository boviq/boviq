import expect from 'expect'

describe('Array', function() {
    describe('indexOf()', function() {
        it('should return -1 when the value is not precent', function() {
            expect([1,2,3].indexOf(3)).toEqual(-1);
        });
    });
});
