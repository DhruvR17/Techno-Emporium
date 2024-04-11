
function addToWishlist(productName) 
{
 var wishlist = document.getElementById("wishlist");
 var li = document.createElement("li");
 li.appendChild(document.createTextNode(productName));
 wishlist.appendChild(li);
}        

    /*const express = require('express');
    const app = express();
    const bodyParser = require('body-parser');
    const wishlist = [];
    
    app.use(bodyParser.json());
    
    app.post('/api/add-to-wishlist', (req, res) => {
        const product = req.body.product;
        wishlist.push(product);
        res.json({ message: 'Product added to wishlist' });
    });
    
    app.get('/api/wishlist', (req, res) => {
        res.json({ wishlist });
    });
    
    app.listen(3000, () => {
        console.log('Server is running on port 3000');
    });*/
    