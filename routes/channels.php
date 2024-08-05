<?php

Broadcast::channel('switcheroo', fn() => true);
Broadcast::channel('switcheroo.{userId}', fn() => true);
