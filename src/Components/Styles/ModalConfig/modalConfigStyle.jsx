import { StyleSheet } from "react-native-web";

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
      },
      topContainer: {
        flexDirection: 'row',
        justifyContent: 'flex-start',
        alignItems: 'center',
        marginTop: 10,
        paddingHorizontal: 5,
      },
      bottomContainer: {
        justifyContent: 'center',
      },
      subTitleContainer: {
        marginVertical: 10, // Adiciona margem entre os subtítulos
      },
      back: {
        height: 35,
        width: 35,
      },
      title: {
        fontSize: 30,
        color: '#a6a6a6',
        textAlign: 'center',
        fontWeight: 'bold',
      },
      subTitle: {
        fontSize: 25,
        color: '#a6a6a6',
        paddingHorizontal: 42,
        fontWeight: 'bold',
      },
      contentContainer: {
        flexDirection: 'row',
        justifyContent: 'center',
        alignItems: 'center',
      },
      column: {
        justifyContent: 'flex-start',
        alignItems: 'flex-start',
        marginHorizontal: 30,
        width: '78%',
      },
      item: {
        flexDirection: 'row',
        alignItems: 'center',
        justifyContent: 'space-between',
        marginBottom: 18, // Adiciona margem entre os itens
        width: '95%',
      },
      buttonContent: {
        flexDirection: 'row',
        alignItems: 'center',
      },
      icon: {
        width: 40,
        height: 40,
        marginRight: 10,
      },
      iconSeta: {
        width: 12,
        height: 20,
        alignSelf:"center",
        marginTop: 5
      },
      itemText: {
        fontSize: 20,
        color: '#a6a6a6',
      },
});
export default styles;