// async test 
function testForResolveAsync() {
    return new Promise(resolve => {
        setTimeout(() => {
        resolve('resolved');
        }, 2000);
    });
}

async function testForAsyncSupport() {
    const result = await testForFesolveAsync();
}

window.sytaxfileparsed = true;