    <?php
require_once 'vendor/autoload.php';

use JonnyW\PhantomJs\Client;

$client = Client::getInstance();
$client->getEngine()->setPath(dirname(__FILE__).'/bin/phantomjs.exe');

 $request = $client->getMessageFactory()->createPdfRequest('http://jonnyw.me', 'GET');
    $request->setOutputFile(dirname(__FILE__).'/document1.pdf');
    $request->setFormat('A4');
    $request->setOrientation('landscape');
    $request->setMargin('1cm');

    /** 
     * @see JonnyW\PhantomJs\Http\Response 
     **/
    $response = $client->getMessageFactory()->createResponse();

    // Send the request
    $client->send($request, $response);
    