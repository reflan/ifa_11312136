import 'package:flutter/material.dart';

import 'package:get/get.dart';
import 'package:ifa_11312136/app/controllers/auth_controller.dart';

import '../controllers/home_controller.dart';

class HomeView extends GetView<HomeController> {
  final cAuth = Get.find<AuthController>();
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
      title: const Text('Data Product'),
      centerTitle: true,
      actions: [
        IconButton(
          onPressed: () => cAuth.logout(),
          icon: Icon(Icons.logout),
        )
      ],
    ));
  }
}
