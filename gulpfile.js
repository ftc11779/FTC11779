const
	gulp = require("gulp"),
	browserSync = require("browser-sync"),
	lib = "./public/lib/";

gulp.task("bs", function(){
	browserSync.init({
		proxy: "http://localhost/website/FTC11779/public/",
		open: false,
		notify: false,
		watch: true,
		watchEvents: ["change"],
		files: ["./public/*.php", lib.concat("css/*.css"), lib.concat("img/*.[jpg,png]"), lib.concat("js/*.js")],
	});
});
