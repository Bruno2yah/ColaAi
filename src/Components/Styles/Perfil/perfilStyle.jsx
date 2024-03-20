import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        flex: 1,
        backgroundColor: '#fff',
      },
      menuButton: {
        position: 'absolute',
        top: 10,
        right: 10,
        zIndex: 1,
      },
      capaPerfilBox: {
        flex: 1,
        height: 210,
      },
      imagePerfil: {
        width: 125,
        height: 125,
        backgroundColor: '#6d9eaf',
        alignSelf: 'flex-start',
        alignItems: 'center',
        justifyContent: 'center',
        borderRadius: 90,
        position: 'absolute',
        marginTop: 85,
        marginLeft: 30
    },
    descOrganizacao: {
        width: '85%',
        alignSelf: 'center',
        alignItems: 'center',
        flexDirection:'row',
    },
    drawerContainer: {
        position: 'absolute',
        top: 50, // Ajuste conforme necessário
        right: 10, // Ajuste conforme necessário
        backgroundColor: '#fff',
        elevation: 5, // Adicione sombra se desejar
        padding: 10,
        borderRadius: 5,
      },
      dadoPessoal: {
        flexDirection: 'row',
        justifyContent: 'space-evenly',
        alignItems: 'center',
        width:'100%'
      },
      imageBanner:{
        width: '100%',
        height: 160,
        backgroundColor: '#FDE681',
        top: 0,
    },
  });
export default styles;

/*Azul - #6d9eaf
Rosa - #e6aeb2
Amarelo - #ffd932
Verde - #a5f866
Vermelho - #fd5620
Laranja - #FDE681*/