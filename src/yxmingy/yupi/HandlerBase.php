<?pho
namespace yxmingy\yupi;
/* 所有Handler之父 */

use pocketmine\Player;

abstract class HandlerBase{
  protected $title;
  public __construct()
  {
    $title = null;
  }
  public __construct(string $title)
  {
    $this->title = $title;
  }
  public __construct(array $title)
  {
    $this->title = $title;
  }
  abstract public function handle(String data,Player player):void;
}
 