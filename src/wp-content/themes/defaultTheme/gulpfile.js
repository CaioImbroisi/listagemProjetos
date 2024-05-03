const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const webpack = require('webpack');
const webpackStream = require('webpack-stream');
const webpackConfig = require('./webpack.config.js');

// Função para compilar SCSS em CSS
function compileSass() {
    return gulp.src('assets/scss/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest('dist/css'));
}

// Função para compilar JavaScript com Webpack
function compileJS() {
    return gulp.src('assets/js/main.js')
        .pipe(webpackStream(webpackConfig), webpack)
        .pipe(gulp.dest('dist/js'));
}

// Tarefa para assistir a mudanças nos arquivos SCSS e JavaScript
function watch() {
    // Monitora mudanças nos arquivos SCSS e executa a função compileSass
    gulp.watch('assets/scss/**/*.scss', compileSass);
    
    // Monitora mudanças nos arquivos JavaScript e executa a função compileJS
    gulp.watch('assets/js/**/*.js', compileJS);
}

// Tarefa padrão que executa a tarefa watch
exports.default = watch;