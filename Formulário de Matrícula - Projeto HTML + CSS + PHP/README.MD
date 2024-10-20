
# 📝 Formulário de Matrícula - Projeto HTML + CSS + PHP

[![HTML](https://img.shields.io/badge/HTML-5-orange?style=flat-square&logo=html5)](https://developer.mozilla.org/pt-BR/docs/Web/HTML)  
[![CSS](https://img.shields.io/badge/CSS-3-blue?style=flat-square&logo=css3)](https://developer.mozilla.org/pt-BR/docs/Web/CSS)  
[![PHP](https://img.shields.io/badge/PHP-8.3-purple?style=flat-square&logo=php)](https://www.php.net/)  

> **Um formulário estiloso, funcional e... com aquele gostinho de PHP para capturar os dados dos alunos! 🎯**  

![Visual](https://dummyimage.com/600x400/3498db/ffffff&text=Formul%C3%A1rio+de+Matr%C3%ADcula+em+A%C3%A7%C3%A3o!)

## 📚 Sobre o Projeto
Esse projeto foi criado durante uma aula prática de **Web Coding** 👨‍🎓. O objetivo é **receber dados** via formulário (Nome, Idade, Curso e Período) e exibi-los logo após o envio — tudo em **tempo real** usando a poderosa trinca **HTML + CSS + PHP**. 🛠️

---

## 🎨 Funcionalidades e Recursos
- **HTML 5:** Estrutura semântica e limpa.  
- **CSS 3:** Um estilo simples e moderno com sombra suave. 🌟  
- **PHP:** Coleta e exibição dos dados enviados pelo usuário.  
- **User Experience:** Campos fáceis de preencher e um design responsivo! 📲

---
## Confere o Visual!
![Formulário de Matrícula - Projeto HTML + CSS + PHP](https://github.com/PhilipeOliveiraS/Web-Coding/blob/main/Formul%C3%A1rio%20de%20Matr%C3%ADcula%20-%20Projeto%20HTML%20+%20CSS%20+%20PHP/Formul%C3%A1rio%20de%20Matr%C3%ADcula%20-%20Projeto%20HTML%20+%20CSS%20+%20PHP.png?raw=true)


## 🛠️ Como o Código Funciona?  
Aqui vai uma explicação **passo a passo** para você entender cada pedacinho deste formulário mágico 🧙:

### 1️⃣ Estrutura HTML  
- Usamos `<form>` para criar o formulário.
- Os campos de **input** incluem Nome, Idade, Curso e Período.  
- O **botão Enviar** ativa o envio dos dados para a mesma página.

```html
<form action="<?php ($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="f_nome">Nome:</label>
    <input type="text" id="f_nome" name="f_nome">
    
    <label for="f_idade">Idade:</label>
    <input type="text" id="f_idade" name="f_idade">

    <label for="f_curso">Curso:</label>
    <input type="text" id="f_curso" name="f_curso">

    <label for="f_periodo">Período:</label>
    <input type="text" id="f_periodo" name="f_periodo">

    <input type="submit" value="Enviar">
</form>
```

### 2️⃣ CSS para Estilo
Combinamos um visual elegante e minimalista com **bordas arredondadas** e **sombra suave** para realçar a interface.

```css
.container {
    background-color: #ffffff;
    border-radius: 8px;
    padding: 20px;
    max-width: 500px;
    margin: 0 auto;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}
```

### 3️⃣ PHP em Ação
Aqui está a mágica: **coletamos os dados** enviados pelo formulário e os exibimos instantaneamente.

```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome1 = $_POST["f_nome"];
    $idade1 = $_POST["f_idade"];
    $curso1 = $_POST["f_curso"];
    $periodo1 = $_POST["f_periodo"];
    
    echo "<p>Nome: $nome1</p>";
    echo "<p>Idade: $idade1</p>";
    echo "<p>Curso: $curso1</p>";
    echo "<p>Período: $periodo1</p>";
}
?>
```

---

## 🔥 Como Executar o Projeto?
1. Clone este repositório:
   ```bash
   git clone https://github.com/PhilipeOliveiraS/Web-Coding.git
   ```
2. Abra o arquivo no seu navegador (se estiver sem PHP).  
3. Para testar com PHP, instale um servidor local, como o [XAMPP](https://www.apachefriends.org/pt_br/index.html).  
4. Coloque o projeto na pasta `htdocs` e acesse via `localhost`.

---

## 🤔 Por que isso é Importante?
Este projeto mostra como um **formulário simples** pode:
- **Capturar dados do usuário** com PHP e HTML.
- **Melhorar a interação** com estilos agradáveis via CSS.  
- **Reforçar conceitos** de frontend e backend.

---


## 🎓 **Quer aprender também?**  

Aqui estão alguns **recursos e cursos gratuitos** que podem te ajudar a dominar HTML, CSS e PHP para criar projetos como este e muito mais:  

### 🔗 **Cursos e Artigos Recomendados**  
1. **HTML e CSS** – [MDN Web Docs](https://developer.mozilla.org/pt-BR/)  
   Documentação oficial com guias completos sobre HTML e CSS.  

2. **PHP para Iniciantes** – [PHP Manual](https://www.php.net/manual/pt_BR/)  
   Aprenda como trabalhar com PHP e criar aplicações dinâmicas.  

3. **Curso de Desenvolvimento Web Full Stack** – [DIO](https://www.dio.me/)  
   Plataforma gratuita com cursos e projetos práticos em desenvolvimento web.  

4. **Projetos Práticos com Frontend e Backend** – [FreeCodeCamp](https://www.freecodecamp.org/)  
   Cursos gratuitos e hands-on para treinar suas habilidades.  

5. **Aprenda Lógica de Programação** – [Curso em Vídeo](https://www.cursoemvideo.com/)  
   Uma ótima introdução à programação com vídeos didáticos em português.  

### 📚 **Comunidades para Tirar Dúvidas**  
- **Stack Overflow** – Tire dúvidas técnicas com desenvolvedores de todo o mundo.  
- **DIO Community** – Participe da comunidade e aproveite mentorias exclusivas.  

**Agora é a sua vez!** Comece hoje mesmo e crie seus próprios projetos web incríveis. 🚀  

---

🖥️ **Dica:** Está gostando? Que tal aplicar o que aprendeu criando um formulário ainda mais completo com **JavaScript** para validação? ✨

---
## 🚀 Próximos Passos  
- Implementar **validação de formulário** com JavaScript.
- Salvar os dados em um banco de dados MySQL.  
- Criar uma versão **responsiva** para celulares. 📱

---

## 📜 Licença  
Este projeto é open-source sob a licença MIT.  

---

## 📬 Contato  
[![GitHub](https://img.shields.io/badge/GitHub-PhilipeOliveiraS-black?style=flat-square&logo=github)](https://github.com/PhilipeOliveiraS)

---

### Feito com ❤️ e muito ☕ por PH 🚀

---

## 💡 Dica Extra  
Se algo der errado... **culpe o compilador, nunca você mesmo!** 😂

---

### Contribuições

Contribuições são bem-vindas! Sinta-se à vontade para abrir issues e pull requests.

---

## Github Stats
![PhilipeOliveiraS](https://github-readme-stats.vercel.app/api?username=PhilipeOliveiraS&show_icons=true&bg_color=0D1117&border_color=30A3DC&icon_color=30A3DC&title_color=0056B3&text_color=FFF)

---
## Minhas Contribuições
[![Repo Card](https://github-readme-stats.vercel.app/api/pin/?username=PhilipeOliveiraS&repo=web-coding&bg_color=0D1117&border_color=30A3DC&show_icons=true&icon_color=30A3DC&title_color=0056B3&text_color=FFF)](https://github.com/PhilipeOliveiraS)
---

![Top Langs](https://github-readme-stats.vercel.app/api/top-langs/?username=PhilipeOliveiraS&layout=compact&bg_color=0D1117&border_color=30A3DC&show_icons=true&icon_color=30A3DC&title_color=0056B3&text_color=FFF)

---

## 📈 Estatísticas do Repositório

![Repo Size](https://img.shields.io/github/repo-size/PhilipeOliveiraS/web-coding?style=for-the-badge)
![GitHub contributors](https://img.shields.io/github/contributors/PhilipeOliveiraS/web-coding?style=for-the-badge)
![GitHub stars](https://img.shields.io/github/stars/PhilipeOliveiraS/web-coding?style=social?style=for-the-badge)
![GitHub forks](https://img.shields.io/github/forks/PhilipeOliveiraS/web-coding?style=social?style=for-the-badge)

---

### Estatísticas do Projeto


![Commit Activity](https://img.shields.io/github/commit-activity/y/PhilipeOliveiraS/web-coding?style=for-the-badge)
![Last Commit](https://img.shields.io/github/last-commit/PhilipeOliveiraS/web-coding?style=for-the-badge)
---
![Animation](https://media.giphy.com/media/du3J3cXyzhj75IOgvA/giphy.gif)
---

Este projeto é mantido por [PhilipeOliveiraS](https://github.com/PhilipeOliveiraS). Contribuições são bem-vindas!