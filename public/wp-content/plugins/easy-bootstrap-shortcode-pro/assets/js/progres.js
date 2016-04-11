function SVGEl( el ) {
    this.el = el;
    // the path elements
    this.paths = [].slice.call( this.el.querySelectorAll( 'path' ) );
    // we will save both paths and its lengths in arrays
    this.pathsArr = new Array();
    this.lengthsArr = new Array();
    this._init();
}

SVGEl.prototype._init = function() {
    var self = this;
    this.paths.forEach( function( path, i ) {
        self.pathsArr[i] = path;
        path.style.strokeDasharray = self.lengthsArr[i] = path.getTotalLength();
    } );
    // undraw stroke
    this.draw(0);
}

// val in [0,1] : 0 - no stroke is visible, 1 - stroke is visible
SVGEl.prototype.draw = function( val ) {
    for( var i = 0, len = this.pathsArr.length; i < len; ++i ){
        this.pathsArr[ i ].style.strokeDashoffset = this.lengthsArr[ i ] * ( 1 - val );
    }
}