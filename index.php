<?php

/**
 * @file
 * The PHP page that serves all page requests on a Drupal installation.
 *
 * All Drupal code is released under the GNU General Public License.
 * See COPYRIGHT.txt and LICENSE.txt files in the "core" directory.
 */

/**
* use Drupal\Core\DrupalKernel;
* use Symfony\Component\HttpFoundation\Request;

* $autoloader = require_once 'autoload.php';

* $kernel = new DrupalKernel('prod', $autoloader);

* $request = Request::createFromGlobals();
* $response = $kernel->handle($request);
* $response->send();

* $kernel->terminate($request, $response);
*/
echo "hello UCB";
?>
<html>
  <p> Good morning ! How are you? </p>
  First name: <input type="text" name="fname"><br>
  Last name: <input type="text" name="lname"><br>
</html>
