(function (a) {
    a.fn.circliful = function (b) {
        var c = a.extend({
            foregroundColor: "#556b2f",
            backgroundColor: "#eee",
            width: 15,
            dimension: 200,
            size: 15,
            percent: 50,
            animationStep:1
        }, b);
        return this.each(function () {
            var H = "";
            var r = "";
            var F = "";
            var u = "";
            var s = 0;
            var e = 0;
            var m = 100;
            var B = "";
            var d = "";
            var E = "";
            var zr = 0;
            a(this).attr("class", "circliful osc_progress_circle");
            if (a(this).data("dimension") != undefined) {
                H = a(this).data("dimension")
            } else {
                H = c.dimension
            } if (a(this).data("width") != undefined) {
                u = a(this).data("width")
            } else {
                u = c.width
            } if (a(this).data("fontsize") != undefined) {
                s = a(this).data("fontsize")
            } else {
                s = c.size
            } if (a(this).data("total") != undefined && a(this).data("part") != undefined) {
                var J = a(this).data("total") / 100;
                e = ((a(this).data("part") / J) / 100).toFixed(3);
                m = (a(this).data("part") / J).toFixed(3)
            } else {
                if (a(this).data("percent") != undefined) {
                    e = a(this).data("percent") / 100;
                    m = a(this).data("percent")
                } else {
                    e = c.percent / 100
                }
            } if (a(this).data("fgcolor") != undefined) {
                B = a(this).data("fgcolor")
            } else {
                B = c.foregroundColor
            } if (a(this).data("bgcolor") != undefined) {
                d = a(this).data("bgcolor")
            } else {
                d = c.backgroundColor
            }
            if (a(this).data("animation-step") != undefined) {
                zr = parseFloat(a(this).data("animation-step"))
            } else {
                zr = c.animationStep
            }
            if (a(this).data("text") != undefined) {
                r = a(this).data("text");
                if (a(this).data("icon") != undefined) {
                    var G = "";
                    var k = "";
                    var C = "";
                    if (a(this).data("icon-size") != undefined && a(this).data("icon-color") != undefined) {
                        C = 'style=" font-size:' + a(this).data("icon-size") + "px; color:" + a(this).data("icon-color") + ';"'
                    } else {
                        if (a(this).data("icon-size") != undefined) {
                            G = 'style=" font-size:' + a(this).data("icon-size") + 'px;"'
                        }
                        if (a(this).data("icon-color") != undefined) {
                            k = 'style=" color:' + a(this).data("icon-color") + ';"'
                        }
                    }
                    E = '<i class="osc_progress_icon  ' + a(this).data("icon") + '" ' + G + k + C + "></i>"
                }
                if (a(this).data("type") != undefined) {
                    i = a(this).data("type");
                    if (i == "half") {
                        a(this).append('<span class="circle-text-half">' + E + r + "</span>");
                        a(this).find(".circle-text-half").css({
                            "line-height": (H / 1.45) + "px",
                            "font-size": s + "px"
                        })
                    } else {
                        a(this).append('<span class="circle-text">' + r + E + "</span>");
                        a(this).find(".circle-text").css({
                            "line-height": H + "px",
                            "font-size": s + "px"
                        })
                    }
                } else {
                    a(this).append('<span class="circle-text">' + r + E + "</span>");
                    a(this).find(".circle-text").css({
                        "line-height": H + "px",
                        "font-size": s + "px"
                    })
                }
            } else {
                if (a(this).data("icon") != undefined) {}
            } if (a(this).data("info") != undefined) {
                F = a(this).data("info");
                if (a(this).data("type") != undefined) {
                    i = a(this).data("type");
                    if (i == "half") {
                        a(this).append('<span class="circle-info-half">' + F + "</span>");
                        a(this).find(".circle-info-half").css({
                            "line-height": (H * 0.9) + "px"
                        })
                    } else {
                        a(this).append('<span class="circle-info">' + F + "</span>");
                        a(this).find(".circle-info").css({
                            "line-height": (H * 1.25) + "px"
                        })
                    }
                } else {
                    a(this).append('<span class="circle-info">' + F + "</span>");
                    a(this).find(".circle-info").css({
                        "line-height": (H * 1.25) + "px"
                    })
                }
            }
            a(this).width(H + "px");
            a(this).append('<canvas id="' + a(this).attr("id") + '_canvas" width="' + H + '" height="' + H + '"></canvas>');
            var h = document.getElementById(a(this).attr("id") + "_canvas");
            var f = h.getContext("2d");
            var p = h.width / 2;
            var o = h.height / 2;
            var A = e * 360;
            var I = A * (Math.PI / 180);
            var j = h.width / 2.5;
            var z = 2.3 * Math.PI;
            var t = 0;
            var D = false;
            var n = 0;
            var q = Math.PI * 2;
            var g = Math.PI / 2;
            var i = "";
            var w = false;
            var v = false;
            var zm = zr === 0 ? m : 0;
            var zn = Math.max(zr, 0);
            if (a(this).data("type") != undefined) {
                i = a(this).data("type");
                if (i == "half") {
                    var z = 2 * Math.PI;
                    var t = 3.13;
                    var q = Math.PI * 1;
                    var g = Math.PI / 0.996
                }
            }
            if (a(this).data("fill") != undefined) {
                w = a(this).data("fill")
            }
            if (a(this).data("border") != undefined) {
                v = a(this).data("border")
            }

            function l(x) {
                f.clearRect(0, 0, h.width, h.height);
                f.beginPath();
                f.arc(p, o, j, t, z, false);
//                f.lineWidth = u - 1;
//                f.strokeStyle = d;
//                f.stroke();
                if (w) {
                    f.fillStyle = w;
                    f.fill()
                }
                f.lineWidth = u - 1;
                f.strokeStyle = d;
                f.stroke();
                f.beginPath();
                f.arc(p, o, j, -(g), ((q) * x) - g, false);
                //console.log(a(this).data("text"));
                if (v) {
                    if (v == "inline") {
                        f.lineWidth = u / 2
                    } else {
                        if (v == "outline") {
                            f.lineWidth = u * 1.2
                        } else {
                            f.lineWidth = u
                        }
                    }
                } else {
                    f.lineWidth = u
                }
                f.strokeStyle = B;
                f.stroke();
//                n++;
//                if (n <= m) {
//                    requestAnimationFrame(function () {
//                        l(n / 100)
//                    })
//                }
                if (zm < m) {
                    zm +=zn;
                    requestAnimationFrame(function () {
                        l(Math.min(zm, m) / 100)
                    })
                }
            }
            l(zm / 100)
        })
    }
}(jQuery));

jQuery( document ).ready(function() {
    jQuery('.osc_progress_bar').live('inview', function(event, visible) {
        if (visible == true) {
            jQuery(this).circliful();

        }
    });
});