# symfony5 DDD skeleton

[![MIT License][license-shield]][license-url]

<!-- ABOUT THE PROJECT -->
## About The Project

- The project's goal is to be the base of another DDD symfony's project.
- Contains a minimal folder structure to hold DDD arch.
- It has a minimal test

### Built With

* [Symfony](https://symfony.com)

<!-- GETTING STARTED -->
## Getting Started
I have prepared a Makefile to make this step more easy and automate.
I stroungly recommend you to do the project's setup via Makefile

### Prerequisites

* Install composer and symfony client
  ```sh
  make require
  ```

### Installation

1. Clone the repo
   ```sh
   git clone git@github.com:cristomanuel/symfony5-skel.git
   cd symfony5-skel
   ```
2. Install composer packages
   ```sh
     make install
   ```

<!-- USAGE EXAMPLES -->
## Usage

1. Launch tests
```sh
  make test
```

2. Launch curl to the endpoint
```sh
  make server
  curl -I http://127.0.0.1:8000/api/context1
```


<!-- CONTRIBUTING -->
## Contributing

Contributions are what make the open source community such an amazing place to be learn, inspire, and create. Any contributions you make are **greatly appreciated**.

1. Fork the Project
2. Create your Feature Branch (`git checkout -b RC/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin RC/AmazingFeature`)
5. Open a Pull Request


<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE` for more information.



<!-- CONTACT -->
## Contact

Cristo Alonso Santana - cristomanuel@gmail.com

Project Link: [https://github.com/cristomanuel/symfony5-skel/](https://github.com/cristomanuel/symfony5-skel/)





<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: images/screenshot.png
