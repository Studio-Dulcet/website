app.use(express.static(pathToBaseFolderOfStaticContent, {
    extensions: ['html', 'htm'],
}));